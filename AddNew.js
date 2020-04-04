$(function () {
    $('select').selectpicker();
});

$('#btest').click(function() {
    $('#exampleFormControlInput1').val('Your text goes here');
}

$("document").ready(function() {
    function myFunction() {
    document.getElementById("demo").style.color = "red";
});

function myFunction() {
    document.getElementById("demo").style.color = "red";

function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                $('#blah').attr('src', e.target.result);
            }
            
            reader.readAsDataURL(input.files[0]);
        }
    }
    
    $("#imgInp").change(function(){
        readURL(this);
    });