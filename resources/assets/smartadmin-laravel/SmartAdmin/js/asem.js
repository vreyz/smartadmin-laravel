/* =============ADDITIONAL BY AAN=============  */

/* NAV FUNCTION TU GIVE ACTIVE CLASS WHEN CLICKED*/
$('.nav-menu li:not(.treeviews-parent) > a').on('click', function (e) {
    //$('.nav-menu li > a').on('click', function () {
    /*alert($(this).attr('href'));*/
    var $parent = $(this).parent().addClass('active');
    $parent.parents('li').addClass('active').siblings().removeClass('active');
    $parent.siblings().removeClass('active').find('li').removeClass('active');
    /*alert($(this).attr('href'));*/
    localStorage.setItem('activeMenu', $(this).attr('href'));
    //alert("alert end link clicked");
});
//setting active and open for parent link
/*var menu = $('.class="treeviews-child li > a[href$="' + (location.pathname + location.search + location.hash) + '"]').parent().addClass('active');
//menu.parents('ul.treeviews-child').addClass('open');
$parent.siblings().removeClass('active');
menu.parents('li.treeviews-child').addClass('active');*/

/* NAV FUNCTION TO GIVE ACTIVE CLASS WHEN CLICKED*/
$('tbody > tr').click( function (e){
    e.preventDefault();
    alert();
    $(this).children().find('input').iCheck('toggle');
});

//save local storage for active navlink
$('a[data-toggle="tab"]').on('show.bs.tab', function(e) {
    localStorage.setItem('activeTab', $(e.target).attr('href'));
});
var activeTab = localStorage.getItem('activeTab');
if(activeTab){
    $('#myTab a[href="' + activeTab + '"]').tab('show');
}
