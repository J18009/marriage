window.onload = function() {
$('#point1 > option[data-val]').wrap('<span>');
$('#point2 > option[data-val]').wrap('<span>');
$('#point3 > option[data-val]').wrap('<span>');
$('#point4 > option[data-val]').wrap('<span>');
$('#point5 > option[data-val]').wrap('<span>');
$('#point6 > option[data-val]').wrap('<span>');
$('#point7 > option[data-val]').wrap('<span>');
$('#point8 > option[data-val]').wrap('<span>');

$('#area1').change(function(){
    $('#point1 > option[data-val]').wrap('<span>');
    $("#point1 option[data-val='"+ $('#area1').val() + "']").unwrap();
});
$('#area2').change(function(){
    $('#point2 > option[data-val]').wrap('<span>');
    $("#point2 option[data-val='"+ $('#area2').val() + "']").unwrap();
});
$('#area3').change(function(){
    $('#point3 > option[data-val]').wrap('<span>');
    $("#point3 option[data-val='"+ $('#area3').val() + "']").unwrap();
});
$('#area4').change(function(){
    $('#point4 > option[data-val]').wrap('<span>');
    $("#point4 option[data-val='"+ $('#area4').val() + "']").unwrap();
});
$('#area5').change(function(){
    $('#point5 > option[data-val]').wrap('<span>');
    $("#point5 option[data-val='"+ $('#area5').val() + "']").unwrap();
});
$('#area6').change(function(){
    $('#point6 > option[data-val]').wrap('<span>');
    $("#point6 option[data-val='"+ $('#area6').val() + "']").unwrap();
});
$('#area7').change(function(){
    $('#point7 > option[data-val]').wrap('<span>');
    $("#point7 option[data-val='"+ $('#area7').val() + "']").unwrap();
});
$('#area8').change(function(){
    $('#point8 > option[data-val]').wrap('<span>');
    $("#point8 option[data-val='"+ $('#area8').val() + "']").unwrap();
});
}