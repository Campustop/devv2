 <script src="<?= SITEURL; ?>webroot/js/jquery.complexify.js"></script> 
 <script type="text/javascript">
	
	(function ($) {
    "use strict";

    var options = {
            errors: [],
            // Options
            minChar: 8,
            errorMessages: {
                password_to_short: "The Password is too short",
                same_as_username: "Your password cannot be the same as your username"
            },
            scores: [17, 26, 40, 50],
            verdicts: ["PasswordStrength: Weak", "PasswordStrength: Normal", "PasswordStrength: Medium", "PasswordStrength: Strong", "PasswordStrength:Very Strong"],
            showVerdicts: true,
            raisePower: 1.4,
            usernameField: "#username",
            onLoad: undefined,
            onKeyUp: undefined,
            viewports: {
                progress: undefined,
                verdict: undefined,
                errors: undefined
            },
            // Rules stuff
            ruleScores: {
                wordNotEmail: -100,
                wordLength: -100,
                wordSimilarToUsername: -100,
                wordLowercase: 1,
                wordUppercase: 3,
                wordOneNumber: 3,
                wordThreeNumbers: 5,
                wordOneSpecialChar: 3,
                wordTwoSpecialChar: 5,
                wordUpperLowerCombo: 2,
                wordLetterNumberCombo: 2,
                wordLetterNumberCharCombo: 2
            },
            rules: {
                wordNotEmail: true,
                wordLength: true,
                wordSimilarToUsername: true,
                wordLowercase: true,
                wordUppercase: true,
                wordOneNumber: true,
                wordThreeNumbers: true,
                wordOneSpecialChar: true,
                wordTwoSpecialChar: true,
                wordUpperLowerCombo: true,
                wordLetterNumberCombo: true,
                wordLetterNumberCharCombo: true
            },
            validationRules: {
                wordNotEmail: function (options, word, score) {
                    return word.match(/^([\w\!\#$\%\&\'\*\+\-\/\=\?\^\`{\|\}\~]+\.)*[\w\!\#$\%\&\'\*\+\-\/\=\?\^\`{\|\}\~]+@((((([a-z0-9]{1}[a-z0-9\-]{0,62}[a-z0-9]{1})|[a-z])\.)+[a-z]{2,6})|(\d{1,3}\.){3}\d{1,3}(\:\d{1,5})?)$/i) && score;
                },
                wordLength: function (options, word, score) {
                    var wordlen = word.length,
                        lenScore = Math.pow(wordlen, options.raisePower);
                    if (wordlen < options.minChar) {
                        lenScore = (lenScore + score);
                        options.errors.push(options.errorMessages.password_to_short);
                    }
                    return lenScore;
                },
                wordSimilarToUsername: function (options, word, score) {
                    var username = $(options.usernameField).val();
                    if (username && word.toLowerCase().match(username.toLowerCase())) {
                        options.errors.push(options.errorMessages.same_as_username);
                        return score;
                    }
                    return true;
                },
                wordLowercase: function (options, word, score) {
                    return word.match(/[a-z]/) && score;
                },
                wordUppercase: function (options, word, score) {
                    return word.match(/[A-Z]/) && score;
                },
                wordOneNumber : function (options, word, score) {
                    return word.match(/\d+/) && score;
                },
                wordThreeNumbers : function (options, word, score) {
                    return word.match(/(.*[0-9].*[0-9].*[0-9])/) && score;
                },
                wordOneSpecialChar : function (options, word, score) {
                    return word.match(/.[!,@,#,$,%,\^,&,*,?,_,~]/) && score;
                },
                wordTwoSpecialChar : function (options, word, score) {
                    return word.match(/(.*[!,@,#,$,%,\^,&,*,?,_,~].*[!,@,#,$,%,\^,&,*,?,_,~])/) && score;
                },
                wordUpperLowerCombo : function (options, word, score) {
                    return word.match(/([a-z].*[A-Z])|([A-Z].*[a-z])/) && score;
                },
                wordLetterNumberCombo : function (options, word, score) {
                    return word.match(/([a-zA-Z])/) && word.match(/([0-9])/) && score;
                },
                wordLetterNumberCharCombo : function (options, word, score) {
                    return word.match(/([a-zA-Z0-9].*[!,@,#,$,%,\^,&,*,?,_,~])|([!,@,#,$,%,\^,&,*,?,_,~].*[a-zA-Z0-9])/) && score;
                }
            }
        },

        setProgressBar = function ($el, score) {
            var options = $el.data("pwstrength"),
                progressbar = options.progressbar,
                $verdict;

            if (options.showVerdicts) {
                if (options.viewports.verdict) {
                    $verdict = $(options.viewports.verdict).find(".password-verdict");
                } else {
                    $verdict = $el.parent().find(".password-verdict");
                    if ($verdict.length === 0) {
                        $verdict = $('<span class="password-verdict"></span>');
                        $verdict.insertAfter($el);
                    }
                }
            }

            if (score < options.scores[0]) {
                progressbar.addClass("progress-danger").removeClass("progress-warning").removeClass("progress-success");
                progressbar.find(".bar").css({"width": "5%","top": "83px"});
                if (options.showVerdicts) {
                    $verdict.text(options.verdicts[0]);
                }
            } else if (score >= options.scores[0] && score < options.scores[1]) {
                progressbar.addClass("progress-danger").removeClass("progress-warning").removeClass("progress-success");
                progressbar.find(".bar").css({"width": "25%","top": "53px"});
                if (options.showVerdicts) {
                    $verdict.text(options.verdicts[1]);
                }
            } else if (score >= options.scores[1] && score < options.scores[2]) {
                progressbar.addClass("progress-warning").removeClass("progress-danger").removeClass("progress-success");
                progressbar.find(".bar").css("width", "50%");
                if (options.showVerdicts) {
                    $verdict.text(options.verdicts[2]);
                }
            } else if (score >= options.scores[2] && score < options.scores[3]) {
                progressbar.addClass("progress-warning").removeClass("progress-danger").removeClass("progress-success");
                progressbar.find(".bar").css("width", "75%");
                if (options.showVerdicts) {
                    $verdict.text(options.verdicts[3]);
                }
            } else if (score >= options.scores[3]) {
                progressbar.addClass("progress-success").removeClass("progress-warning").removeClass("progress-danger");
                progressbar.find(".bar").css("width", "93%");
                if (options.showVerdicts) {
                    $verdict.text(options.verdicts[4]);
                }
            }
        },

        calculateScore = function ($el) {
            var self = this,
                word = $el.val(),
                totalScore = 0,
                options = $el.data("pwstrength");

            $.each(options.rules, function (rule, active) {
                if (active === true) {
                    var score = options.ruleScores[rule],
                        result = options.validationRules[rule](options, word, score);
                    if (result) {
                        totalScore += result;
                    }
                }
            });
            setProgressBar($el, totalScore);
            return totalScore;
        },

        progressWidget = function () {
            return '<div class="progress"><div class="bar"></div></div>';
        },

        methods = {
            init: function (settings) {
                var self = this,
                    allOptions = $.extend(options, settings);

                return this.each(function (idx, el) {
                    var $el = $(el),
                        progressbar,
                        verdict;

                    $el.data("pwstrength", allOptions);

                    $el.on("keyup", function (event) {
                        var options = $el.data("pwstrength");
                        options.errors = [];
                        calculateScore.call(self, $el);
                        if ($.isFunction(options.onKeyUp)) {
                            options.onKeyUp(event);
                        }
                    });

                    progressbar = $(progressWidget());
                    if (allOptions.viewports.progress) {
                        $(allOptions.viewports.progress).append(progressbar);
                    } else {
                        progressbar.insertAfter($el);
                    }
                    progressbar.find(".bar").css("width", "0%");
                    $el.data("pwstrength").progressbar = progressbar;

                    if (allOptions.showVerdicts) {
                        verdict = $('<span class="password-verdict">' + allOptions.verdicts[0] + '</span>');
                        if (allOptions.viewports.verdict) {
                            $(allOptions.viewports.verdict).append(verdict);
                        } else {
                            verdict.insertAfter($el);
                        }
                    }

                    if ($.isFunction(allOptions.onLoad)) {
                        allOptions.onLoad();
                    }
                });
            },

            destroy: function () {
                this.each(function (idx, el) {
                    var $el = $(el);
                    $el.parent().find("span.password-verdict").remove();
                    $el.parent().find("div.progress").remove();
                    $el.parent().find("ul.error-list").remove();
                    $el.removeData("pwstrength");
                });
            },

            forceUpdate: function () {
                var self = this;
                this.each(function (idx, el) {
                    var $el = $(el),
                        options = $el.data("pwstrength");
                    options.errors = [];
                    calculateScore.call(self, $el);
                });
            },

            outputErrorList: function () {
                this.each(function (idx, el) {
                    var output = '<ul class="error-list">',
                        $el = $(el),
                        errors = $el.data("pwstrength").errors,
                        viewports = $el.data("pwstrength").viewports,
                        verdict;
                    $el.parent().find("ul.error-list").remove();

                    if (errors.length > 0) {
                        $.each(errors, function (i, item) {
                            output += '<li>' + item + '</li>';
                        });
                        output += '</ul>';
                        if (viewports.errors) {
                            $(viewports.errors).html(output);
                        } else {
                            output = $(output);
                            verdict = $el.parent().find("span.password-verdict");
                            if (verdict.length > 0) {
                                el = verdict;
                            }
                            output.insertAfter(el);
                        }
                    }
                });
            },

            addRule: function (name, method, score, active) {
                this.each(function (idx, el) {
                    var options = $(el).data("pwstrength");
                    options.rules[name] = active;
                    options.ruleScores[name] = score;
                    options.validationRules[name] = method;
                });
            },

            changeScore: function (rule, score) {
                this.each(function (idx, el) {
                    $(el).data("pwstrength").ruleScores[rule] = score;
                });
            },

            ruleActive: function (rule, active) {
                this.each(function (idx, el) {
                    $(el).data("pwstrength").rules[rule] = active;
                });
            }
        };

    $.fn.pwstrength = function (method) {
        var result;
        if (methods[method]) {
            result = methods[method].apply(this, Array.prototype.slice.call(arguments, 1));
        } else if (typeof method === "object" || !method) {
            result = methods.init.apply(this, arguments);
        } else {
            $.error("Method " +  method + " does not exist on jQuery.pwstrength");
        }
        return result;
    };
}(jQuery));
</script>


<script src="<?= SITEURL; ?>webroot/js/vendor/jquery.ui.widget.js"></script>
<!-- The Load Image plugin is included for the preview images and image resizing functionality -->
<script src="<?= SITEURL; ?>webroot/js/load-image.all.min.js"></script> 
<!-- The Canvas to Blob plugin is included for image resizing functionality -->
<script src="<?= SITEURL; ?>webroot/js/canvas-to-blob.min.js"></script>
<!-- The Iframe Transport is required for browsers without support for XHR file uploads -->
<script src="<?= SITEURL; ?>webroot/js/jquery.iframe-transport.js"></script>
<!-- The XDomainRequest Transport is included for cross-domain file deletion for IE 8 and IE 9 -->
<!--[if (gte IE 8)&(lt IE 10)]>
<script src="js/cors/jquery.xdr-transport.js"></script>
<![endif]-->
<style type="text/css">
	html,body{
	margin: 0px;
	padding: 0px;
	font-family: Georgia, "Times New Roman", Times, serif;
}
h2{
	text-align: center;
	margin: 50px 0 0;
	color: #848484;
	padding: 0;
	font: 1.5em "Trebuchet MS", Arial, Helvetica, sans-serif;
}
.upload-wrapper {
		max-width: 500px;
		background-color: #E4E4E4;
	 
		border: 1px solid #ff9900 ;
	box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.14);
		-webkit-box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.14);
	-moz-box-box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.14);
}
.priceset 
{
		 
			margin-left: 2%;
}
 .bar { 
						position: absolute;
						height: 18px; 
						background: blue; 
						width: 0%;
						top: 50%;
				}
				.box {
						position: relative;
						background: palegreen;
						width: 200px;
						min-height: 200px;
						margin: 40px;
				}
				.boxhover {
						background: lawngreen;
				}

.price
{
	display: none!important;
	width:5%;
}
.changeprice
{
	margin-right:2%;
	width:5%;
}
#dropzone{
		border: 1px solid #C7C7C7;
		padding: 20px;
		text-align: center;
		box-shadow: inset 0px 0px 12px rgba(0, 0, 0, 0.12);
		-webkit-box-shadow: inset 0px 0px 12px rgba(0, 0, 0, 0.12);
		-moz-box-box-shadow: inset 0px 0px 12px rgba(0, 0, 0, 0.12);
		border-radius: 3px;
}
#dropzone i{
		display: block;
		font-size: small;
		margin-bottom: 5px;
		color: #CACACA;
		text-shadow: 1px 1px 1px #fff;
}
#dropzone1{
		border: 1px solid #C7C7C7;
		padding: 20px;
		text-align: center;
		box-shadow: inset 0px 0px 12px rgba(0, 0, 0, 0.12);
		-webkit-box-shadow: inset 0px 0px 12px rgba(0, 0, 0, 0.12);
		-moz-box-box-shadow: inset 0px 0px 12px rgba(0, 0, 0, 0.12);
		border-radius: 3px;
}
#dropzone1 i{
		display: block;
		font-size: small;
		margin-bottom: 5px;
		color: #CACACA;
		text-shadow: 1px 1px 1px #fff;
}
#dropzone2{
		border: 1px solid #C7C7C7;
		padding: 20px;
		text-align: center;
		box-shadow: inset 0px 0px 12px rgba(0, 0, 0, 0.12);
		-webkit-box-shadow: inset 0px 0px 12px rgba(0, 0, 0, 0.12);
		-moz-box-box-shadow: inset 0px 0px 12px rgba(0, 0, 0, 0.12);
		border-radius: 3px;
}
#dropzone2 i{
		display: block;
		font-size: small;
		margin-bottom: 5px;
		color: #CACACA;
		text-shadow: 1px 1px 1px #fff;
}
.input-file {
		position: relative;
		overflow: hidden;
}
.input-file input[type=file] {
		position: absolute;
		top: 0;
		right: 0;
		min-width: 100%;
		min-height: 100%;
		font-size: 100px;
		text-align: right;
		filter: alpha(opacity=0);
	-ms-filter: 'alpha(opacity=0)';
		opacity: 0;
		outline: none;
		background: white;
		cursor: pointer;
		display: block;
}
.button{
		position: relative;
		overflow: hidden;
		font-family: inherit;
		padding: .5em 1em;
		color: #444;
		color: rgba(0,0,0,.8);
		border: 1px solid #999;
		border: 0 rgba(0,0,0,0);
		text-decoration: none;
		border-radius: 2px;
		display: inline-block;
		color: #fff;
		font-size: 0.8em;    
	margin-left: 2px;
}
.button:hover{
	 box-shadow: inset 0 0 8px rgba(0, 0, 0, 0.4);
		-webkit-box-shadow: inset 0 0 8px rgba(0, 0, 0, 0.4);
		-moz-box-box-shadow: inset 0 0 8px rgba(0, 0, 0, 0.4);
}
.button:disabled{
		background-color: #D4D4D4;
		color: #B1B1B1;
		text-shadow: 1px 1px 1px rgba(255, 255, 255, 0.52);
	box-shadow:none;
	-moz-box-box-shadow:none;
	-webkit-box-shadow:none;
}
.btn-blue{
		background-color: #ff9900;
}
.btn-red{
	background-color: #EA6363;
	margin-left: 6%;
}
.file-row {
		padding: 3px;
		background-color: #DCDCDC;
		margin-top: 0px;
		box-shadow: inset 0px 0px 12px rgba(0, 0, 0, 0.04);
		-webkit-box-shadow: inset 0px 0px 12px rgba(0, 0, 0, 0.04);
		-moz-box-box-shadow: inset 0px 0px 12px rgba(0, 0, 0, 0.04);
		
	min-height:50px;
}
.file-row video{
		width:100%;
}
.file-row audio{
		width:100%;
}

.file-row .file-remove{
		float: right;
		margin-top: 2%;
		text-decoration: none;
		color:#848484;
}
.file-uploaded{
		background-color: #D2D6E0;
}
.file-row canvas{
		float: left;
		margin-right: 10px;
}
.file-row span {
		font-size: small;
		color: #848484;
		margin-bottom: 4px;
		max-width: 300px;
		overflow: hidden;
		max-height: 16px;
}
.progress{
		background-color: #FFF;
		height: 10px;
		overflow: hidden;
		display: block;
		border: 1px solid rgba(0, 0, 0, 0.3);
		padding: 1px;
		width: 100px;
		border-radius: 6px;    
 
}
.progress .progress-bar {
		background-color: rgba(67, 196, 218, 0.99);
		width: 0;
		height: 10px;
		float: left;
		text-align: center;
		border-radius: 10px;
		font-size: 9px;
		box-shadow: inset 0px 0px 9px rgba(49, 74, 56, 0.42);
		-webkit-box-shadow: inset 0px 0px 9px rgba(49, 74, 56, 0.42);
		-moz-box-box-shadow: inset 0px 0px 9px rgba(49, 74, 56, 0.42);
}
#error_output{
	color: red;
}
.text-danger, .text-success{
		float: left;
		margin-top: -10px;
		font-style: italic;
}
.text-danger {
		color: #F00!important;
}
.text-success{
		color: #0CAF00!important;
}
.progress {
  -webkit-border-radius: 0;
  -moz-border-radius: 0;
  border-radius: 0;
  height: 12px;
   background-color: #333333;
    height: 7px;
    margin-bottom: 10px;
    width: 103%;
}
.about-us  h6{
  margin-bottom:10px;
}
.progress-bar {
  font-size: 14px;
  background: #1e1e1e;
  filter: none;
  -webkit-box-shadow: none;
  -moz-box-shadow: none;
  box-shadow: none;
  line-height: 40px;
  text-align: left;
  text-indent: 10px;
  text-shadow: none;
  -webkit-transition: background 0.2s linear;
  transition: background 0.2s linear;
}
.progress-label{
	color: #171717;
    font-weight: 300;
    position: absolute;
    right: -1px;
    top: -38px;
}
.white .progress-label{
	color:#ffffff;
}
.white .progress{
	background-color:#f7f7f7;
}
.progress-bar{
	text-align:right;
	position:absolute;
	height:12px;
}
.progress{
	background-color:#333333;
	margin-bottom:10px;
}
.bar{
	height:5px;
	cursor:pointer;
	position:absolute;
	 background-color: #ff9900;
    top: 55px;
    width: 71%;
}
.bar:after{
	height:8px;
	width:1px;
	position:absolute;
	right:-1px;
	top:-3px;
	content:"";
	cursor:pointer;
}
.bar:before{
	height:8px;
	width:1px;
	position:absolute;
	left:0px;
	top:-3px;
	content:"";
	cursor:pointer;
}
	.progress-danger .bar{
		top: 85px;

	}
	.progress-success .bar{

		top: 53px;
    width: 75%;

	}
.progress-warning .bar{

		top: 30px;

}
</style>
<script>
 $(document).ready(function () {


     $(function () { $("#password").complexify({}, function (valid, complexity) { document.getElementById("PassValue").value = complexity; }); });


         

                 
    });

    if($(window).width() < "1224")
    {
       $(".img-responsive").remove();
       $("p").css("padding-top","10%");
       
    }
    function checkterms()
    {
        
        if(document.getElementById('optradio').checked!=false)
        {
            
            $("#confirmMessage").hide();
        }
        else
        {
            
            $("#confirmMessage").show();
        }
    }
    function showdetails(value)
    {
        
        if(value==1)
        {

            
            $("#student").show();
          
            $("#professor").find('*').removeClass('has-success has-error glyphicon-ok glyphicon-remove form-control-feedback fa fa-times');
            $("#optradio").removeClass('has-success has-error glyphicon-ok glyphicon-remove');
            $("#professor").hide();
            $('#professor input').val('');
            $('#professor').find('input[type=checkbox]:checked').remove();
        }
        else
        {

            $("#student").hide();
           // $("#professor").fadeIn();
           $("#student").find('*').removeClass('has-success has-error glyphicon-ok glyphicon-remove form-control-feedback fa fa-times');
            $("#optradio").removeClass('has-success has-error glyphicon-ok glyphicon-remove');
           $("#professor").show();
            $("#professor").css({"padding-top": "20px"});
            $('#student input').val('');
            $('#student').find('input[type=checkbox]:checked').remove();
            
        }
    }

</script>

<style type="text/css">
.nav-tabs>li {

	 border-left: 1px solid #ddd;
				font-size: 19px;
				
}  

	.nav-tabs {
		
		background-color: #F8F8F8;
}
.form-control {
		display: inline-table;
				width: 79%;

}

select#email_flag option[value="null"]   
{ 

		background-image:url("http://localhost/cakephp3/webroot/img/globe.jpg"); 
			background-repeat: no-repeat;
}

input[type="text"].error, input[type="file"].error, input[type="password"].error,input[type="checkbox"].error textarea.error, select.error {
 border:1px solid #F00!important;
}

label.error {
 color:#ff0000!important;
}
.myButton {
		background: #ff9900 linear-gradient(to bottom, #ff9900 5%, #ff9900 100%) repeat scroll 0 0;
		border-radius: 5px;
		box-shadow: 2px 2px 0 0 #c0c0c0;
		color: #ffffff;
		cursor: pointer;
		display: inline-block;
		font-family: Arial;
		font-size: 17px;
		margin-left: 2%;
		padding: 3px 18px;
		text-decoration: none;
		text-shadow: 0 1px 0 #e1e2ed;
}

.submit_btn {
	 background:url("http://localhost/cakephp3/webroot/img/plus.jpg") no-repeat;
	border: medium none !important;
	width: 10%;
	height: 8%;
		/*margin-left: 55.5%;*/
	color: transparent;
	float: right;
		
}
.hrstyle
{
	background-color: #ff9900;
		border: medium none;
		box-shadow: 0 2px 2px #c0c0c0;
		display: block;
		height: 1px;
		margin-bottom: 3%;
}

.bordered {
		border: 1px solid #f00;
}
.borderdgreen{

	border: 1px solid #00a65a;
	
}
ul.tagit {
	padding: 0;
	border-radius: unset;
	margin-left: 11% !important;
	}
.ui-widget {
		width: 70%;
	}

</style>


<nav class="navbar navbar-static-top" role="navigation" style="min-height: 45px;background-color:#F1F1F1;border-bottom: 1px solid #D3D7DA;">
			 <section id="tabs" class="page-section">
						<div class="" style="">
								<div class="row">
													<div class="col-md-12" >
																	<div role="tabpanel" style="background-color: #FFFFFF;">
																			<!-- Nav tabs -->
																			 <ul class="nav nav-tabs" role="tablist">
																					<li role="presentation" class="active">
																							<a href="#home1" aria-controls="home" role="tab" data-toggle="tab">
																							<i class="fa fa-home"></i>Change Password</a>
																					</li>
																			</ul>
																			<!-- Tab panes -->
																			<div class="tab-content" style="">
																					<div role="tabpanel" class="tab-pane active" id="home1" style="padding-left:1%;padding-right:1%;">
																									<section id="contact-us" class="page-section">

																												<div class="container">
																												<div class="row">
																														<div class="col-md-12 contact-info">
																																
																														</div>
																												</div>
																												<hr class="pad-10">
																													<div class="row">
																													<?= $this->Flash->render('positive') ?>
																													<?= $this->Flash->render('update') ?>
																													<?= $this->Flash->render('nagative') ?>
																													<p class="form-message" style="display: none;"></p>

																													<?php //$this->Form->create($note,['action' => 'add','id' => 'noteform']) ?>
																													 
                           <?= $this->Form->create($changepassword,['name'=>'changepassword','id'=>'changepassword']) ?>
																																	<div class="col-md-6">

                                   <div class="col-md-12 input-text form-group">
                                            <div class="col-md-4">
                                                <label>Old Password:<sup>*</sup></label> 
                                                  </div>

                                            <div class="col-md-8">
                                            <input type="password" class="input-name form-control" id="oldpassword" name="oldpassword" placeholder="Old Password" />

                                                                                   
                                            </div>
                                   </div>
                                  <div class="col-md-12 input-text form-group">
                                            <div class="col-md-4">
                                                <label>New Password:<sup>*</sup></label> 
                                                  </div>

                                            <div class="col-md-8">
                                            <input type="password" class="input-name form-control" id="password" name="password" placeholder="New Password" />
                                            <meter value="0" id="PassValue" max="100" style="width:80%"></meter>
                                         
                                            

                                                                                   
                                            </div>
                                   </div>
                                         <div class="col-md-12 input-text form-group">
                                            <div class="col-md-4">
                                                <label>Confirm Password:<sup>*</sup></label> 
                                                  </div>

                                                  <div class="col-md-8">
                                               <input type="password"  class="input-name form-control" id="reg_cpwd" name="reg_cpwd" placeholder="Confirm Password " />

                                                                                   
                                                </div>
                                         </div>                                


																																			<?php echo $this->Form->button('Change Password', array('type' => 'submit','class'=>'myButton hvr-grow'));?>

																																	</div>
																																	<?php echo $this->Form->end(); ?>
																														
																														</div>

																												</div>
																								</section><!-- page-section -->
																					</div> 
																			</div>
																
																</div>
													</div>
									 </div>
						 </div>
		 </section>
</nav>