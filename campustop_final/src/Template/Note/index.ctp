<script src="<?= SITEURL; ?>webroot/js/vendor/jquery.ui.widget.js"></script>
<script src="<?= SITEURL; ?>webroot/js/load-image.all.min.js"></script> 
<script src="<?= SITEURL; ?>webroot/js/canvas-to-blob.min.js"></script>
<script src="<?= SITEURL; ?>webroot/js/jquery.iframe-transport.js"></script>
<script src="<?= SITEURL; ?>webroot/js/jquery.fileupload.js"></script>
<script src="<?= SITEURL; ?>webroot/js/jquery.fileupload-process.js"></script>
<script src="<?= SITEURL; ?>webroot/js/jquery.fileupload-image.js"></script>
<script src="<?= SITEURL; ?>webroot/js/jquery.fileupload-video.js"></script>
<script src="<?= SITEURL; ?>webroot/js/jquery.fileupload-audio.js"></script>
<script src="<?= SITEURL; ?>webroot/js/jquery.fileupload-validate.js"></script>
<link href="<?= SITEURL; ?>webroot/css/notestyle.css" type="text/css" rel="stylesheet">
<script>
$(document).ready(function() 
{
    var count =0;
    $("#addtag").click(function () 
    {
        if(count<4)
        {
          $("#test1").append(' <div class="col-md-3"></div><div class="col-md-9"><input type="text" name="tag[]" style="width: 69%;margin-left: 12%;margin-bottom: 3%;" class="input-name form-control"  placeholder="tag"  value="" /></div>');
        }
        else
        {
          alert("More than five tags are not allowed.");
        }
        count++;
    });
    $("#readat").click(function () {
         $("#read1").append(' <div class="col-md-3"></div><div class="col-md-9"><input type="text" name="read_at[]" style="width: 69%;margin-left: 12%;margin-bottom: 3%;" class="input-name form-control"  placeholder="Conferences/Seminars where paper was read"  value="" /></div>');
    });
    $("#team").click(function () {
         $("#team1").append(' <div class="col-md-3"></div><div class="col-md-9"><input type="text" name="team_member[]" style="width: 69%;margin-left: 12%;margin-bottom: 3%;" class="input-name form-control"  placeholder="Conferences/Seminars where paper was read"  value="" /></div>');
    });
    $("#under").click(function () {
         $("#under1").append(' <div class="col-md-3"></div><div class="col-md-9"><input type="text" name="under_gidance[]" style="width: 69%;margin-left: 12%;margin-bottom: 3%;" class="input-name form-control"  placeholder="Make your Guide/Mentor famous"  value="" /></div>');
    });
$("#resourse").change(function()
{

        var value = $( "#resourse" ).val();

        if(value == 5)
        {
         $("#video").show("slow");
         $("#notes").hide("slow");
         $("#research").hide("slow");
         $("#casestudy").hide("slow");
        
        }
        else if(value == 6)
        {
            $("#notes").hide("slow");
            $("#research").show("slow");
            $("#video").hide("slow");
             $("#casestudy").hide("slow");
        }
        else if(value == 3)
        {
            $("#notes").show("slow");
            $("#research").hide("slow");
            $("#video").hide("slow");
             $("#casestudy").hide("slow");
        }
         else if(value == 7)
        {
            $("#casestudy").show("slow");
            $("#notes").hide("slow");
            $("#research").hide("slow");
            $("#video").hide("slow");
        }
        else
        { 
          $("#notes").hide("slow");
          $("#research").hide("slow");
          $("#video").hide("slow");
          $("#casestudy").hide("slow");
        } 
});

$(function(){
            var sampleTags = ['c++'];
            $('.singleFieldTagsnote').tagit({
                      availableTags: sampleTags,
                      allowSpaces: true
            });  
        });
});

</script>

 <script type="text/javascript">
$(document).ready(function() 
{
  var bannedWords = ["4r5e","50 yard cunt punt","5h1t","5hit","a_s_s","a2m","a55","adult","amateur","anal","anal impaler","anal leakage","anilingus","anus","ar5e","arrse","arse","arsehole","ass","ass fuck","asses","assfucker","ass-fucker","assfukka","asshole","asshole","assholes","assmucus","assmunch","asswhole","autoerotic","b!tch","b00bs","b17ch","b1tch","ballbag","ballsack","bang (one's) box","bangbros","bareback","bastard","beastial","beastiality","beef curtain","bellend","bestial","bestiality","bi+ch","biatch","bimbos","birdlock","bitch","bitch tit","bitcher","bitchers","bitches","bitchin","bitching","bloody","blow job","blow me","blow mud","blowjob","blowjobs","blue waffle","blumpkin","boiolas","bollock","bollok","boner","boob","boobs","booobs","boooobs","booooobs","booooooobs","breasts","buceta","bugger","bum","bunny fucker","bust a load","busty","butt","butt fuck","butthole","buttmuch","buttplug","c0ck","c0cksucker","carpet muncher","carpetmuncher","cawk","chink","choade","chota bags","cipa","cl1t","clit","clit licker","clitoris","clits","clitty litter","clusterfuck","cnut","cock","cock pocket","cock snot","cockface","cockhead","cockmunch","cockmuncher","cocks","cocksuck", "cocksucked","cocksucker","cock-sucker","cocksucking","cocksucks","cocksuka","cocksukka","cok","cokmuncher","coksucka","coon","cop some wood","cornhole","corp whore","cox","cum","cum chugger","cum dumpster","cum freak","cum guzzler","cumdump","cummer","cumming","cums","cumshot","cunilingus","cunillingus","cunnilingus","cunt","cunt air","cuntbag","cuntlick","cuntlicker","cuntlicking","cunts","cuntsicle","cunt-struck","cut rope","cyalis","cyberfuc","cyberfuck","cyberfucked", "cyberfucker","cyberfuckers","cyberfucking", "d1ck","damn","dick","dick hole","dick shy","dickhead","dildo","dildos","dink","dinks","dirsa","dirty Sanchez","dlck","dog-fucker","doggie style","doggiestyle","doggin","dogging","donkeyribber","doosh","duche","dyke","eat a dick","eat hair pie","ejaculate","ejaculated","ejaculates","ejaculating","ejaculatings","ejaculation","ejakulate","erotic","fuck","fucke r", "f_u_c_k","f4nny","facial","fag","fagging","faggitt","faggot","faggs","fagot","fagots","fags","fanny","fannyflaps","fannyfucker","fanyy","fatass","fcuk","fcuker","fcuking","feck","fecker","felching","fellate","fellatio","fingerfuck","fingerfucked", "fingerfucker","fingerfuckers","fingerfucking", "fingerfucks", "fist fuck","fistfuck","fistfucked", "fistfucker","fistfuckers", "fistfucking", "fistfuckings", "fistfucks","flange","flog the log","fook","fooker","fuck hole","fuck puppet","fuck trophy","fuck yo mama","fuck","fucka","fuck-ass","fuck-bitch","fucked","fucker","fuckers","fuckhead","fuckheads","fuckin","fucking","fuckings", "fuckingshitmotherfucker","fuckme","fuckmeat","fucks","fucktoy","fuckwhit","fuckwit","fudge packer","fudgepacker","fuk","fuker","fukker","fukkin","fuks","fukwhit","fukwit","fux","fux0r", "gangbang","gangbang","gang-bang","gangbanged","gangbangs","gassy ass","gaylord","gaysex","goatse","god","god damn","god-dam","goddamn","goddamned","god-damned","ham flap","hardcoresex","hell","heshe","hoar","hoare","hoer","homo","homoerotic","hore","horniest","horny","hotsex","how to kill","how to murder","jackoff","jack-off","jap","jerk","jerk-off","jism","jiz", "jizm","jizz","kawk","kinky", "Jesus","knob","knob end","knobead","knobed","knobend","knobend","knobhead","knobjocky","knobjokey","kock","kondum","kondums","kum","kummer","kumming","kums","kunilingus","kwif","l3i+ch","l3itch","labia","LEN","lmao","lmfao","lmfao","lust","lusting","m0f0","m0fo","m45terbate","ma5terb8","ma5terbate","mafugly","masochist","masterb8","masterbat*","masterbat3","masterbate","master-bate","masterbation","masterbations","masturbate","mof0","mofo","mo-fo","mothafuck","mothafucka","mothafuckas","mothafuckaz","mothafucked","mothafucker","mothafuckers","mothafuckin","mothafucking","mothafuckings","mothafucks","mother fucker","mother fucker","motherfuck","motherfucked","motherfucker","motherfuckers","motherfuckin","motherfucking","motherfuckings","motherfuckka","motherfucks","muff","muff puff","mutha","muthafecker","muthafuckker","muther","mutherfucker","n1gga","n1gger","nazi","need the dick","nigg3r","nigg4h","nigga","niggah","niggas","niggaz","nigger","niggers", "nob","nob jokey","nobhead","nobjocky","nobjokey","numbnuts","nut butter","nutsack","omg","orgasim","orgasimsv","orgasmv","orgasms","p0rn","pawn","pecker","penis","penisfucker","phonesex","phuck","phuk","phuked","phuking","phukked","phukking","phuks","phuq","pigfucker","pimpis","piss","pissed","pisser","pissers","pisses","pissflaps","pissin","pissing","pissoff", "poop","porn","porno","pornography","pornos","prick","pricks", "pron","pube","pusse","pussi","pussies","pussy","pussy fart","pussy palace","pussys","queaf","queer","rectum","retard","rimjaw","rimming","s hit","s.o.b.","s_h_i_t","sadism","sadist","sandbar","sausage queen","schlong","screwing","scroat","scrote","scrotum","semen","sexa","sh!+","sh!t","sh1t","shag","shagger","shaggin","shagging","shemale","shi+","shit","shit fucker","shitdick","shite","shited","shitey","shitfuck","shitfull","shithead","shiting","shitings","shits","shitted","shitter","shitters","shitting","shittings","shitty","skank","slope","slut","slut bucket","sluts","smegma","smut","snatch","son-of-a-bitch","spac","spunk","t1tt1e5","t1tties","teets","teez","testical","testicle","tit","tit wank","titfuck","tits","titt","tittie5","tittiefucker","titties","tittyfuck","tittywank","titwank","tosser","turd","tw4t","twat","twathead","twatty","twunt","twunter","v14gra","v1gra","vagina","viagra","vulva","w00se","wang","wank","wanker","wanky","whoar","whore","willies","willy","wtf","xrated","xxx","yaoi","yellow showers","yiffy","zoophilia2g1c","2 girls 1 cup","acrotomophilia","alabama hot pocket","alaskan pipeline","anal","anilingus","anus","vapeshit","arsehole","ass","asshole","assmunch","auto erotic","autoerotic","babeland","baby batter","baby juice","ball gag","ball gravy","ball kicking","ball licking","ball sack","ball sucking","bangbros","bareback","barely legal","barenaked","bastardo","bastinado","bbw","bdsm","beaner","beaners","beaver cleaver","beaver lips","bestiality","big black","big breastsv","big knockers","big tits","bimbos","birdlock","bitch","bitches","black cock","blonde action","blonde on blonde action","blowjob","blow job","blow your load","blue waffle","blumpkin","bollocks","bondage","boner","boob","boobs","booty call","brown showers","brunette action","bukkake","bulldyke","bullet vibe","bullshit","bung hole","bunghole","busty","butt","buttcheeks","butthole","camel toe","camgirl","camslut","camwhore","carpet muncher","carpetmuncher","chocolate rosebuds","circlejerk","cleveland steamer","clit","clitoris","clover clamps","clusterfuck","cock","cocks","coprolagnia","coprophilia","cornhole","coon","coons","creampie","cum","cumming","cunnilingus","cunt","darkie","date rape","daterape","deep throat","deepthroat","dendrophilia","dick","dildo","dirty pillows","dirty sanchez","doggie style","doggiestyle","doggy style","doggystyle","dog style","dolcett","domination","dominatrix","dommes","donkey punch","double dong","double penetration","dp action","dry hump","dvda","eat my ass","ecchi","ejaculation","erotic","erotism","escort","ethical slut","eunuch","faggot","fecal","felch","fellatio","feltch","female squirting","femdom","figging","fingerbang","fingering","fisting","foot fetish","footjob","frotting","fuck","fuck buttons","fucking","fudge packer","fudgepacker","futanari","gang bang","gay sex","genitals","giant cock","girl on","girl on top","girls gone wild","goatcx","goatse","god damn","gokkun","golden shower","goodpoop","goo girl","goregasm","grope","group sex","g-spot","guro","hand job","handjob","hard core","hardcore","hentai","homoerotic","honkey","hooker","hot carl","hot chick","how to kill","how to murder","huge fat","humping","incest","intercourse","jack off","jail bait","jailbait","jelly donut","jerk off","jigaboo","jiggaboo","jiggerboo","jizz","juggs","kike","kinbaku","kinkster","kinky","knobbing","leather restraint","leather straight jacket","lemon party","lolita","lovemaking","make me come","male squirting","masturbate","menage a trois","milf","missionary position","motherfucker","mound of venus","mr hands","muff diver","muffdiving","nambla","nawashi","negro","neonazi","nigga","nigger","nig nog","nimphomania","nipple","nipples","nsfw images","nude","nudity","nympho","nymphomania","octopussy","omorashi","one cup two girls","one guy one jar","orgasm","orgy","paedophile","paki","panties","panty","pedobear","pedophile","pegging","penis","phone sex","piece of shit","pissing","piss pig","pisspig","playboy","pleasure chest","pole smoker","ponyplay","poof","poon","poontang","punany","poop chute","poopchute","porn","porno","pornography","prince albert piercing","pthc","pubes","pussy","queaf","queef","quim","raghead","raging boner","rape","raping","rapist","rectum","reverse cowgirl","rimjob","rimming","rosy palm","rosy palm and her 5 sisters","rusty trombone","sadism","santorum","scat","schlong","scissoring","semen","sex","sexo","sexy","shaved beaver","shaved pussy","shemale","shibari","shit","shitty","shota","shrimping","skeet","slanteye","slut","s&m","smut","snatch","snowballing","sodomize","sodomy","spic","splooge","splooge moose","spooge","spread legs","spunk","strap on","strapon","strappado","strip club","style doggy","suck","sucks","suicide girls","sultry women","swastika","swinger","tainted love","taste my","tea bagging","threesome","throating","tied up","tight white","tit","tits","titties","titty","tongue in a","topless","tosser","towelhead","tranny","tribadism","tub girl","tubgirl","tushy","twat","twink","twinkie","two girls one cup","undressing","upskirt","urethra play","urophilia","vagina","venus mound","vibrator","violet wand","vorarephilia","voyeur","vulva","wank","wetback","wet dream","white power","wrapping men","wrinkled starfish","xx","xxx","yaoi","yellow showers","yiffy","zoophilia","allumŽ","allumŽe","baiser","bander","bigornette","bite","bitte","bloblos","bordel","bosser","bourrŽ","bourrŽe","branlage","branler","branlette","branleur","branleuse","brouter le cresson","caca","cailler","chatte","chiasse","chier","chiottes","clito","clitoris","con","connard","connasse","conne","couilles","cramouille","cul","dŽconne","dŽconner","drague","emmerdant","emmerder","emmerdeur","emmerdeuse","enculŽ","enculŽe","enfoirŽ","enfoirŽe","Žtronv","fille de pute","fils de pute","folle","foutre","gerber","gouine","grande folle","grogniasse","gueule","jouir","la putain de ta mre","MALPT","mŽnage a trois","merde","merdeuse","merdeux","meuf","ngre","nique ta mre","noune","palucher","pŽdale","pŽdŽ","pŽter","pipe","pipi","pisser","pouffiasse","pousse-crotte","putain","pute","queue","ramoner","salaud","salope","serin","service trois pices","suce","tapette","teuf","trick","tringler","trique","trou du cul","turlute","veuve","Asesinato","asno","bastardo","Bollera","Cabron","Cabr—n","Caca","Chupada","Chupapollas","Chupet—n","concha","Concha de tu madre","Co–o","Coprofag’a","Culo","Drogas","Esperma","Fiesta de salchichas","Follador","Follar","Gilipichis","Gilipollas","Hacer una paja","Haciendo el amor","Hero’na","Hija de puta","Hijaputa","Hijo de puta","Hijoputa","Idiota","ImbŽcil","infierno","Jilipollas","Kapullo","Lameculos","Maciza","Macizorra","maldito","Mamada","Marica","Maric—n","Mariconazo","martillo","Mierda","Nazi","Orina","Pedo","Pervertido","Pez—n","Pinche","Pis","Prostituta","Puta","Racista","Ramera","S‡dico","Semen","Sexo","Sexo oral","Soplagaitas","Soplapollas","Tetas grandes","T’a buena","Travesti","Trio","Verga","vete a la mierda","Vulva"],
  regex = new RegExp('\\b' + bannedWords.join("\\b|\\b") + '\\b', 'i'); 
  $( "#noteform" ).submit(function( event ) 
  {
      var val = $('#description_resourse').val();
      var collageid = $('#collage_id').val();
      var programid = $('#programid').val();
      var countryid = $('#countryid').val();
      var degreeid = $('#degreeid').val();
      var resourse = $('#resourse').val();
      var flag=true;
      var flag=true;

    if(!resourse)
    {
        
        $("#degreemessageblank1").show("slow");
        $('#resourse').addClass('bordered');
         $('#resourse').removeClass('borderdgreen');
        $("#resoursemessagevalid .fa-times").css({ display: "none" });
        $("#resoursemessagevalid .fa-check").css({ display: "block" });  
        flag = false;
    }
    else
    {
      $('#resourse').addClass('borderdgreen');
     $('#resourse').removeClass('bordered');
    }

      if(resourse==5)
      {

          var youtubelinks = $('#youtubelinks').val();
          if(!youtubelinks)
          {
            $("#youtubelinksmessageblank").show("slow");
            $('#youtubelinks').addClass('bordered'); 
             $('#youtubelinks').removeClass('borderdgreen'); 
            $("#youtubelinksmessagevalid").css({ display: "none" });
            $("#youtubelinksmessageblank").css({ display: "block" });   
            flag = false;
          }
          else
          {
             $('#youtubelinks').addClass('borderdgreen'); 
              $("#youtubelinksmessagevalid").css({ display: "block" });
            $("#youtubelinksmessageblank").css({ display: "none" });   
          }
          
      }
      if(resourse==3)
      {

        //var agreement = $('#agreement').val();
        
          if($("#agreement").is(':checked'))
          {
            //flag = true;
            $('#agreement').removeAttr('style');
            $('#agreement').css('outline-color', '#00a65a');
            $('#agreement').css('outline-style', 'solid');
            $('#agreement').css('outline-width', 'thin');
             $("#agreementvalid").css({ display: "block" });
             $("#agreementeblank").css({ display: "none" });   
            //return true;
          }
          else
          {
           // alert("cccc");
            $("#agreementeblank").show("slow");
            $('#agreement').css('outline-color', 'red');
            $('#agreement').css('outline-style', 'solid');
            $('#agreement').css('outline-width', 'thin');
            $("#agreementvalid .fa-times").css({ display: "none" });
            $("#agreementeblank .fa-check").css({ display: "block" });   
            flag = false;
          }

      }
       if(resourse==6)
      {

          var field = $('#field').val();
          if(!field)
          {
            $("#fieldmessageblank").show("slow");
            $('#field').addClass('bordered'); 
            $('#field').removeClass('borderdgreen'); 
            $("#fieldmessagevalid").css({ display: "none" });
            $("#fieldmessageblank").css({ display: "block" });   
            flag = false;
          }
           else
          {

            $('#field').addClass('borderdgreen'); 
            
             $("#fieldmessageblank").css({ display: "none" });
            $("#fieldmessagevalid").css({ display: "block" });   
          }
        

          var readat = $('#read_at').val();
          if(!readat)
          {
            $("#readatmessageblank").show("slow");
            $('#read_at').addClass('bordered');
            $('#read_at').removeClass('borderdgreen'); 
             
            $("#readatmessagevalid").css({ display: "none" });
            $("#readatmessageblank").css({ display: "block" });   
            flag = false;
          }
           else
          {

            $('#read_at').addClass('borderdgreen'); 
            
             $("#readatmessageblank").css({ display: "none" });
            $("#readatmessagevalid").css({ display: "block" });   
          }

          var publishin = $('#publishin').val();
          if(!publishin)
          {
            $("#publishinmessageblank").show("slow");
            $('#publishin').addClass('bordered'); 
             $('#publishin').removeClass('borderdgreen'); 
            $("#publishinmessagevalid").css({ display: "none" });
            $("#publishinmessageblank").css({ display: "block" });   
            flag = false;
          }
           else
          {

            $('#publishin').addClass('borderdgreen'); 
            
             $("#publishinmessageblank").css({ display: "none" });
            $("#publishinmessagevalid").css({ display: "block" });   
          }
          var publishonyear = $('#publish_on_year').val();
          if(!publishonyear)
          {
            $("#publishonyearmessageblank").show("slow");
            $('#publish_on_year').addClass('bordered'); 
             $('#publish_on_year').removeClass('borderdgreen'); 
            $("#publishonyearmessagevalid .fa-times").css({ display: "none" });
            $("#publishonyearmessageblank .fa-check").css({ display: "block" });   
            flag = false;
          }
           else
          {

            $('#publish_on_year').addClass('borderdgreen'); 
            
             $("#publishonyearmessageblank").css({ display: "none" });
            $("#publishonyearmessagevalid").css({ display: "block" });   
          }
          var publishonmonth = $('#publish_on_month').val();

          if(!publishonmonth)
          {
            $("#publishonmonthmessageblank").show("slow");
            $('#publish_on_month').addClass('bordered'); 
            $('#publish_on_month').removeClass('borderdgreen'); 
            $("#publishonmonthmessagevalid .fa-times").css({ display: "none" });
            $("#publishonmonthmessageblank .fa-check").css({ display: "block" });   
            flag = false;
          }
           else
          {

            $('#publish_on_month').addClass('borderdgreen'); 
            
             $("#publishonmonthmessageblank").css({ display: "none" });
            $("#publishonmonthmessagevalid").css({ display: "block" });   
          }

          var teammember = $('#team_member').val();
          
          if(!teammember)
          {
            $("#teammembermessageblank").show("slow");
            $('#team_member').addClass('bordered'); 
            $('#team_member').removeClass('borderdgreen'); 
            $("#teammembermessagevalid").css({ display: "none" });
            $("#teammembermessageblank").css({ display: "block" });   
            flag = false;
          }
          else
          {

            $('#team_member').addClass('borderdgreen'); 
            
            $("#teammembermessageblank").css({ display: "none" });
            $("#teammembermessagevalid").css({ display: "block" });   
          }

          var undergidance = $('#under_gidance').val();
          
          if(!undergidance)
          {
            $("#undergidancemessageblank").show("slow");
            $('#under_gidance').addClass('bordered'); 
            $("#undergidancemessagevalid .fa-times").css({ display: "none" });
            $("#undergidancemessageblank .fa-check").css({ display: "block" });   
            flag = false;
          }
          else
          {

            $('#under_gidance').addClass('borderdgreen'); 
            
            $("#undergidancemessageblank").css({ display: "none" });
            $("#undergidancemessagevalid").css({ display: "block" });   
          }

          if($("#agreement1").is(':checked'))
          {
             $('#agreement1').removeAttr('style');
            //return true;
          }
          else
          {
           // alert("cccc");
          
            $("#agreement1blank").show("slow");
            $('#agreement1').css('outline-color', 'red');
            $('#agreement1').css('outline-style', 'solid');
            $('#agreement1').css('outline-width', 'thin');
            $("#agreement1valid .fa-times").css({ display: "none" });
            $("#agreement1valid .fa-check").css({ display: "block" });   
            flag = false;
          }
          
          
      }

       if(resourse==7)
      {

        //var agreement = $('#agreement').val();

          var field = $('#casefield').val();
          if(!field)
          {
            $("#casefieldmessageblank").show("slow");
            $('#casefield').addClass('bordered'); 
            $('#casefield').removeClass('borderdgreen'); 
             $("#casefieldmessageblank").css({ display: "block" });
            $("#casefieldmessagevalid").css({ display: "none" });   

           
            flag = false;
          }
          else
          {

            $('#casefield').addClass('borderdgreen'); 
            
             $("#casefieldmessageblank").css({ display: "none" });
            $("#casefieldmessagevalid").css({ display: "block" });   
          }
        
          if($("#agreementcase").is(':checked'))
          {
            //flag = true;
            $('#agreementcase').removeAttr('style');
             $('#agreementcase').css('outline-color', '#00a65a');
            $('#agreementcase').css('outline-style', 'solid');
            $('#agreementcase').css('outline-width', 'thin');
               $("#agreementcasevalid").css({ display: "block" }); 
                $("#agreementcaseblank").css({ display: "none" });  
           
          }
          else
          {
            
            $("#agreementcaseblank").show("slow");
            $('#agreementcase').css('outline-color', 'red');
            $('#agreementcase').css('outline-style', 'solid');
            $('#agreementcase').css('outline-width', 'thin');
            $("#agreementcasevalid .fa-times").css({ display: "none" });
            $("#agreementcasevalid .fa-check").css({ display: "block" });   
            flag = false;
          }

      }

      if(!val)
      {
          $("#messageblank").show("slow");
          $('#description_resourse').addClass('bordered');
          $("#messagevalid .fa-times").css({ display: "none" });
          $("#messagevalid .fa-check").css({ display: "block" });  
          flag= false;
      }
      if(!collageid)
      {
          
          $("#messageblank1").show("slow");
          $('#collage_id').addClass('bordered');
          $('#nameresourse').removeClass('borderdgreen'); 
          $("#messagevalid1").css({ display: "none" });
          $("#messageblank1").css({ display: "block" });   
          flag= false;
      }
      else
      {
        
         $('#collage_id').addClass('borderdgreen');
         $("#messagevalid1").css({ display: "block" });
          $("#messageblank1").css({ display: "none" });  
      }

      if(!countryid)
      {
          $("#countrymessageblank").show("slow");
          $('#countryid').addClass('bordered'); 
           $('#countryid').removeClass('borderdgreen'); 
          $("#countrymessagevalid").css({ display: "none" });
          $("#countrymessageblank").css({ display: "block" });  
            flag= false;
      }
       else
      {
        
         $('#countryid').addClass('borderdgreen');
         $("#countrymessagevalid").css({ display: "block" });
          $("#countrymessageblank").css({ display: "none" });  
      }

      var nameresourse = $('#nameresourse').val();
      if(!nameresourse)
      {
          
         $("#nameresoursemessageblank").show("slow");
         $('#nameresourse').addClass('bordered');
         $('#nameresourse').removeClass('borderdgreen');
         $("#nameresoursemessagevalid").css({ display: "none" });
          $("#nameresoursemessageblank").css({ display: "block" });  
         flag= false;
      }
      else
      {
        
         $('#nameresourse').addClass('borderdgreen');
         $("#nameresoursemessagevalid").css({ display: "block" });
          $("#nameresoursemessageblank").css({ display: "none" });  
      }

      if(!programid)
      {
          $("#programmessageblank").show("slow");
          $('#programid').addClass('bordered'); 
           $('#programid').removeClass('borderdgreen'); 
          $("#countrymessagevalid").css({ display: "none" });
          $("#programmessageblank").css({ display: "block" });
           flag= false;
      }
      else
      {
        
         $('#programid').addClass('borderdgreen');
         $("#programmessagevalid").css({ display: "block" });
          $("#programmessageblank").css({ display: "none" });  
      }
      if(!degreeid)
      {
          $("#degreemessageblank1").show("slow");
          $('#degreeid').addClass('bordered');  
          $('#degreeid').removeClass('borderdgreen');
          $("#degreemessagevalid").css({ display: "none" });
          $("#degreemessageblank").css({ display: "block" });
           flag= false;
      }

      else
      {
        
         $('#degreeid').addClass('borderdgreen');
          $("#degreemessagevalid").css({ display: "block" });
          $("#degreemessageblank").css({ display: "none" });
      }

     if(!description_resourse)
      {
        
          $("#degreemessageblank1").show("slow");
          $('#description_resourse').addClass('bordered'); 
           $('#description_resourse').removeClass('borderdgreen');   
          $("#countrymessagevalid .fa-times").css({ display: "none" });
          $("#countrymessagevalid .fa-check").css({ display: "block" });
           flag= false;
      }
      return flag;
      if(!regex.test(val))
      {
            $("#messagevalid").show();
            $('#description_resourse').addClass('borderdgreen');  
            $("#messagenotvalid").hide("slow");
            $("#messageblank").hide("slow");
             return false;
      }
      else if(regex.test(val))
      {
            data = val+ " is not a proper word.";
            $("#messagenotvalid").show("slow");
            $("#messagevalid").hide("slow");
            $("#messageblank").hide("slow");
            $('#description_resourse').addClass('bordered');  
            $('#description_resourse').removeClass('borderdgreen');
            $('#messagenotvalid').html(data); 
        }    
      var resourcename = $('#nameresourse').val();
      checktypeofresourse(resourcename);

      
  
});

$( "#description_resourse" ).blur(function() {
  var val = $('#description_resourse ').val();
  if(!val)
  {
  
     $("#messageblank").show("slow");
     $('#description_resourse').addClass('bordered');
     $('#description_resourse').removeClass('borderdgreen');   
     $("#messagevalid").css({ display: "none" });
      $("#messageblank").css({ display: "block" });
     return false;
  }
    
if(!regex.test(val))
  {
    $("#messagevalid").show();
    $('#description_resourse').addClass('borderdgreen');  
    $("#messagenotvalid").hide("slow");
    $("#messageblank").hide("slow");
    
  }
  else if(regex.test(val))
  {
      data = val+ " is not a proper word.";
      $("#messagenotvalid").show("slow");
      $("#messagevalid").hide("slow");
      $("#messageblank").hide("slow");
      $('#description_resourse').addClass('bordered');  
      $('#description_resourse').removeClass('borderdgreen'); 
      $('#messagenotvalid').html(data); 
      return false;
  }
});


$( "#nameresourse" ).blur(function() {
    var val = $('#collage_id').val();
    if(!val)
    {
       $("#messageblank1").show("slow");
       $('#nameresourse').addClass('bordered');
       $("#messagevalid .fa-times").css({ display: "none" });
        $("#messagevalid .fa-check").css({ display: "block" });  
       return false;
    }
 
});


$( "#nameresourse" ).blur(function() {
 if(!nameresourse)
      {
         
          $('#nameresourse').addClass('borderdgreen');
         $("#nameresoursemessagevalid").css({ display: "block" });
          $("#nameresoursemessageblank").css({ display: "none" });  
         
      }
      else
      {
       
         
          $("#nameresoursemessageblank").show("slow");
         $('#nameresourse').addClass('bordered');
         $('#nameresourse').removeClass('borderdgreen');
         $("#nameresoursemessagevalid").css({ display: "none" });
          $("#nameresoursemessageblank").css({ display: "block" });  
         flag= false;
      }
  });    




$( "#collage_id" ).blur(function() {
    var val = $('#collage_id').val();
    if(!val)
    {
       $("#messageblank1").show("slow");
       $('#collage_id').addClass('bordered');
       $("#messagevalid .fa-times").css({ display: "none" });
        $("#messagevalid .fa-check").css({ display: "block" });  
       return false;
    }
    else
    {
      $('#collage_id').removeClass('bordered');
    }
  return true;
});

$( "#programid" ).blur(function() 
{
    var programid = $('#programid').val();
  
    if(!programid)
    {
        $("#programmessageblank").show("slow");
        $('#programid').addClass('bordered');
        $("#programmessagevalid .fa-times").css({ display: "none" });
        $("#programmessagevalid .fa-check").css({ display: "block" });  
        return false;
    }
     else
    {
      $('#programid').removeClass('bordered');
    }


    return true;

});
$( "#countryid" ).blur(function() 
{
  
     var countryid = $('#countryid').val();
     
      if(!countryid)
      {
          $("#countrymessageblank").show("slow");
          $('#countryid').addClass('bordered'); 
          $("#countrymessagevalid .fa-times").css({ display: "none" });
          $("#countrymessagevalid .fa-check").css({ display: "block" }); 
          return false;
      }
      else
      {
        $('#countryid').removeClass('bordered');
      }
    return true;

});
$( "#degreeid" ).blur(function() 
{
    var degreeid = $('#degreeid').val();
    if(!degreeid)
    {
        $("#degreemessageblank1").show("slow");
        $('#degreeid').addClass('bordered'); 
        $("#degreemessagevalid .fa-times").css({ display: "none" });
        $("#degreemessagevalid .fa-check").css({ display: "block" }); 
        return false;
    }
     else
    {
      $('#degreeid').removeClass('bordered');
    }
      
    return true;

});
$( "#resourse" ).blur(function() 
{
    var resourse = $('#resourse').val();
    if(!resourse)
    {
        $("#degreemessageblank1").show("slow");
        $('#resourse').addClass('bordered');
        $("#resoursemessagevalid .fa-times").css({ display: "none" });
        $("#resoursemessagevalid .fa-check").css({ display: "block" });  
        return false;
    }
 }); 


$( "#nameresourse" ).blur(function() 
{
    var resourse = $('#nameresourse').val();
    if(!resourse)
    {
       $("#nameresoursemessageblank").show("slow");
       $('#nameresourse').addClass('bordered');
       $("#nameresoursemessagevalid .fa-times").css({ display: "none" });
        $("#nameresoursemessagevalid .fa-check").css({ display: "block" });  
       return false;
    }
	else{
		$('#nameresourse').removeClass('bordered');
	}
   

});


    if(resourse==7)
      {

          $( "#casefield").blur(function() 
          {


                  //var agreement = $('#agreement').val();
                   var field = $('#casefield').val();
                    if(!field)
                    {

                      $("#casefieldmessageblank").show("slow");
                      $('#casefield').addClass('bordered'); 
                       $("#casefieldmessageblank").css({ display: "block" });
                      $("#casefieldmessagevalid").css({ display: "none" });   

                     
                      flag = false;
                    }
                    else
                    {

                      $('#casefield').addClass('borderdgreen'); 
                      
                       $("#casefieldmessageblank").css({ display: "none" });
                      $("#casefieldmessagevalid").css({ display: "block" });   
                    }
                  

                    if($("#agreementcase").is(':checked'))
                    {
                      //flag = true;
                      $('#agreementcase').removeAttr('style');
                       $('#agreementcase').css('outline-color', '#00a65a');
                      $('#agreementcase').css('outline-style', 'solid');
                      $('#agreementcase').css('outline-width', 'thin');
                         $("#agreementcasevalid").css({ display: "block" }); 
                          $("#agreementcaseblank").css({ display: "none" });  
                     
                    }
                    else
                    {
                      
                      $("#agreementcaseblank").show("slow");
                      $('#agreementcase').css('outline-color', 'red');
                      $('#agreementcase').css('outline-style', 'solid');
                      $('#agreementcase').css('outline-width', 'thin');
                      $("#agreementcasevalid .fa-times").css({ display: "none" });
                      $("#agreementcasevalid .fa-check").css({ display: "block" });   
                      flag = false;
                    }

              

              });

  }
    

}); //script         
</script>
<style type="text/css">


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
                                    <i class="fa fa-home"></i> Notes Upload</a>
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
                         <?php 
                           //echo $this->request->session()->read('positive');
                        if($this->request->session()->read('notepositive')!="")
                            {?>

                              <script type="text/javascript">
                              $(document).ready(function () { 
                                  noty({
                                    layout: 'center',
                                    type: 'success',
                                    text: 'Note have been upload successfully',
                                    dismissQueue: true, 
                                    animation: {
                                      open: {height: 'toggle'},
                                      close: {height: 'toggle'},
                                      easing: 'swing',
                                      speed: 500 
                                      },
                                    timeout: 0
                                    });     
                             });
                              </script>
                      <?php }?>
                    
                          <?= $this->Flash->render('update') ?>
                           <?= $this->Flash->render('nagative') ?>
                            <p class="form-message" style="display: none;"></p>
                
                                <?php //$this->Form->create($note,['action' => 'add','id' => 'noteform']) ?>
                                  <form id="noteform" method="post" action="Note/addnotedetails">
                                                          <div class="col-md-6">
                                                                     <div class="col-md-12 input-text form-group">
                                                                         <div class="col-md-4">
                                                                            <label>Name of resourse:<sup>*</sup></label> 
                                                                          </div>
                                                                          <div class="col-md-8">
                                                                                <input type="text" name="name_of_resourse" class="input-name form-control" placeholder="Eg. Introduction" id="nameresourse" onblur="checktypeofresourse(this.value)"/>

                                                                                <div style="display:none;color: #a94442;" id="nameresoursemessagenotvalid">Note title is already exists<i class="form-control-feedback fa fa-times" data-bv-icon-for="program_id" style="cursor: pointer;color: #a94442;" data-original-title="" title=""></i></div>

                                                                                <div style="display:none;" id="nameresoursemessageblank"><i class="form-control-feedback fa fa-times" data-bv-icon-for="program_id" style="cursor: pointer;color: #a94442;" data-original-title="" title=""></i></div>
                                                                                <div style="display:none;color: 00a65a;" id="nameresoursemessagevalid"><i class="form-control-feedback fa fa-check" data-bv-icon-for="degree_id" style="cursor: pointer; display: block;color: #00a65a;" data-original-title="" title=""></i></div>
                                                                          </div>
                                                                      </div>

                                                                       <div class="col-md-12 form-group">
                                                                                        <div class="col-md-4">
                                                                                        <label >Collage:<sup>*</sup></label> 
                                                                                        </div>
                                                                                         <div class="col-md-8">

                                                                                          <select name="collage_id" id="collage_id" 
                                                                                          class="input-email form-control"  data-show-icon="true">
                                                                                                  <option value="">Select Collage</option>
                                                                                                   <?php 
                                                                                                        foreach ($collage as $list):
                                                                                                    ?>
                                                                                                            <option value="<?php echo $list['collage_id']?>" >
                                                                                                                <?php echo ucwords($list['collage_name']);?>
                                                                                                            </option>
                                                                                                <?php endforeach; ?>
                                                                                          </select>
                                                                                            
                                                                                          <div style="display:none;" id="messageblank1"><i class="form-control-feedback fa fa-times" data-bv-icon-for="program_id" style="cursor: pointer;color: #a94442;" data-original-title="" title=""></i></div>

                                                                                          <div style="display:none;color: 00a65a;" id="messagevalid1"><i class="form-control-feedback fa fa-check" data-bv-icon-for="degree_id" style="cursor: pointer; display: block;color: #00a65a;" data-original-title="" title=""></i></div>
                                                                                        </div>
                                                                        </div>
                                                                         <div class="col-md-12 form-group">
                                                                                  <div class="col-md-4">
                                                                                     <label>Country:<sup>*</sup>

                                                                                     </label> 
                                                                                  </div>
                                                                                  <div class="col-md-8">
                                                                                      <select name="country_id" id="countryid" class="form-control"  >
                                                                                              <option value="">Select country</option>
                                                                                               <?php foreach ($country as $list):
                                                                                                ?>
                                                                                                        <option value="<?php echo $list['country_id']?>">
                                                                                                        
                                                                                                          <?php echo ucwords($list['country_name']);?>
                                                                                                        </option>
                                                                                            <?php endforeach; ?>
                                                                                      </select>
                                                                                      <div style="display:none;" id="countrymessageblank"><i class="form-control-feedback fa fa-times" data-bv-icon-for="program_id" style="cursor: pointer;color: #a94442;" data-original-title="" title=""></i></div>
                                                                                      <div style="display:none;color: 00a65a;" id="countrymessagevalid"><i class="form-control-feedback fa fa-check" data-bv-icon-for="degree_id" style="cursor: pointer; display: block;color: #00a65a;" data-original-title="" title=""></i></div>
                                                                                  </div>
                                                                        </div>
                                                                        <div class="col-md-12 form-group">
                                                                                         <div class="col-md-4">
                                                                                        <label>Restrict resourse to collage?<sup>*</sup></label> 
                                                                                        </div>
                                                                                        <div class="col-md-8">
                                                                                           <input type="radio" name="collage_restricted" value="Y"  checked> Yes
                                                                                            <input type="radio" name="collage_restricted" value="N"> No
                                                                                        </div>

                                                                        </div>

                                                                        <div class="col-md-12 form-group">
                                                                              <div class="col-md-4">
                                                                                    <label >Program/Major:<sup>*</sup></label> 
                                                                              </div>
                                                                              <div class="col-md-8">
                                                                                  <?php echo $this->Form->select('program_id', $program, array('class'=>'input-email form-control','empty' => 'Choose major','id'=>'programid'));?>
                                                                                    <div style="display:none;" id="programmessageblank"><i class="form-control-feedback fa fa-times" data-bv-icon-for="program_id" style="cursor: pointer;color: #a94442;" data-original-title="" title=""></i></div>
                                                                                    <div style="display:none;color: 00a65a;" id="programmessagevalid"><i class="form-control-feedback fa fa-check" data-bv-icon-for="degree_id" style="cursor: pointer; display: block;color: #00a65a;" data-original-title="" title=""></i></div>
                                                                              </div>  
                                                                        </div>
                                                                        <div class="col-md-12 form-group">
                                                                              <div class="col-md-4">
                                                                                  <label >Degree:<sup>*</sup></label> 
                                                                              </div>
                                                                              <div class="col-md-8">
                                                                                   <select name="degree_id" id="degreeid" class="form-control"  data-show-icon="true">
                                                                                              <option value="">Choose Degree</option>
                                                                                               <?php foreach ($degree as $list):
                                                                                                ?>
                                                                                                        <option value="<?php echo $list['degree_id']?>">
                                                                                                        
                                                                                                          <?php echo ucwords($list['de_name']);?>
                                                                                                        </option>
                                                                                            <?php endforeach; ?>
                                                                                      </select>


                                                                                   <div style="display:none;" id="degreemessageblank"><i class="form-control-feedback fa fa-times" data-bv-icon-for="program_id" style="cursor: pointer;color: #a94442;" data-original-title="" title=""></i></div>
                                                                                    <div style="display:none;color: 00a65a;" id="degreemessagevalid"><i class="form-control-feedback fa fa-check" data-bv-icon-for="degree_id" style="cursor: pointer; display: block;color: #00a65a;" data-original-title="" title=""></i></div>
                                                                              </div>
                                                                        </div>

                                                                         <div class="col-md-12 input-text form-group" id="test1">
                                                                                         <div class="col-md-3">
                                                                                        <label >Tag:</label> 
                                                                                        </div>
                                                                                         <div class="col-md-9">
                                                                                        

                                                                                            <input type="text" id="singleFieldTagsnote" name="tag" class="singleFieldTagsnote input-name form-control" placeholder="tag" value="" style="width: 69%;margin-left: 12%;margin-bottom: 3%;">
                                                                                            </div>


                                                                        </div>

                                                                        <div class="col-md-12 input-text form-group">
                                                                                         <div class="col-md-4">
                                                                                        <label >Description of the resourse:<sup>*</sup></label> 
                                                                                        </div>
                                                                                        <div class="col-md-8">
                                                                                            <textarea style="height: 120px; width: 248px;" name="description_resourse" id="description_resourse"></textarea>

                                                                                            <div style="display:none;" id="messageblank"><i class="form-control-feedback fa fa-times" data-bv-icon-for="program_id" style="cursor: pointer;color: #a94442;" data-original-title="" title=""></i></div>

                                                                                            <div style="display:none;color: #a94442;" id="messagenotvalid">Words are proper words<i class="form-control-feedback fa fa-times" data-bv-icon-for="program_id" style="cursor: pointer;color: #a94442;" data-original-title="" title=""></i></div>

                                                                                            <div style="display:none;color: 00a65a;" id="messagevalid"><i class="form-control-feedback fa fa-check" data-bv-icon-for="degree_id" style="cursor: pointer; display: block;color: #00a65a;" data-original-title="" title=""></i></div>
                                                                                        </div>
                                                                        </div>

                                                                         <div class="col-md-12 form-group">
                                                                                        <div class="col-md-4">
                                                                                         <label >Type of Resourse:<sup>*</sup></label> 
                                                                                         </div>
                                                                                         <div class="col-md-8">
                                                                                            <?php echo $this->Form->select('resource_id', $resource_name, array('class'=>'form-control','empty' => 'Choose resourse', 'id'=>'resourse'));?>
                                                                                            <?php echo $this->Form->hidden('created_dt', ['value'=>time()]);
                                                                                            ?>
                                                                                            <div style="display:none;" id="resoursemessageblank"><i class="form-control-feedback fa fa-times" data-bv-icon-for="program_id" style="cursor: pointer;color: #a94442;" data-original-title="" title=""></i></div>
                                                                                            <div style="display:none;color: 00a65a;" id="resoursemessagevalid"><i class="form-control-feedback fa fa-check" data-bv-icon-for="degree_id" style="cursor: pointer; display: block;color: #00a65a;" data-original-title="" title=""></i></div>
                                                                                            </div>
                                                                        </div>
                                                                </div>
                                                              <div class="row">
                                                                      <div class="col-md-12" id="video" style="display:none;">
                                                                          <?php  include('video.ctp');?>
                                                                      </div>
                                                                      <div class="col-md-12" id="notes" style="display:none;">
                                                                          <h3>Notes</h3>
                                                                          <?php include 'notes.ctp';?>

                                                                      </div>
                                                                      <div class="col-md-12" id="casestudy" style="display:none;">
                                                                           <h3>Case Study</h3>
                                                                          <?php include 'casestudy.ctp';?>

                                                                      </div>

                                                                        <div class="col-md-12" id="research" style="display:none;">

                                                                      <?php  include('research.ctp');?>

                                                                       </div>
                                                                      </div>
                                                    

                                                            <div>
                                                                <?php //echo $this->Form->input('Save', ['type' => 'submit','class'=>'myButton hvr-grow']);?>

                                                                <input type="submit" value="Save" class="myButton hvr-grow">
                                                            </div>
                                          <?php //echo $this->Form->end(); ?>
                               </form>
                  </div>
      </div>
  </section><!-- page-section -->
                                </div>
                                <div role="tabpanel" class="tab-pane" id="profile1">
                                   
                                    <?php //include 'education.ctp';?>
                                </div>
                               
                        </div>
                    </div>
                </div>

            </div>
            </section>
            </nav>

<script type="text/javascript">
  function checktypeofresourse(value)
  {
      if(value)
      {
             $.ajax({
                 type:"POST",
                 url:"<?php echo SITEURL.'note/checkname';?>",
                 data:{nameofresourse:value},
                 success: function(data)
                 {
                    if(data==1)
                      {
                          $('#nameresoursemessagenotvalid').show(); 
                          return false; 
                      }
                      if(data==0)
                      {
                      $('#nameresourse').removeClass('bordered');
                      $('#nameresourse').addClass('bordeblue');
                      $(".fa-times").css({ display: "none" });
                      $(".fa-check").css({ display: "block" });
                      
                      return true; 
                  }
                  
                 }
                });
    }
  }
</script> 
<script type="text/javascript">
 $(document).ready(function(){
 
    $('.noty_message').on('click', function() 
    {  
    
     $.ajax({
               type:"POST",
               url:"<?php echo SITEURL.'note/resetsession';?>",
               success: function(data)
               {
                  
                 
               }
              });
  });
});
</script>