var next_load = "";
var rnext_load = "";
$(document).ready(function() {
    $('.gallery_modal').on('show.bs.modal', function() {
        var owl = $(this).find('.album_carousel');
        owl.owlCarousel({
            loop: false,
            items: 1, //to display the thumbnail item in center
            nav: true,
            navText: ["<i class='fa fa-angle-left' aria-hidden='true'></i>", "<i class='fa fa-angle-right' aria-hidden='true'></i>"],
            dots: false
        })
    });
    $('.resend_button').hide();
    $("input[name$='feed']").click(function() {
        var inputValue = $(this).attr("value");
        var targetBox = $("." + inputValue);
        $(".box").not(targetBox).hide();
        $(targetBox).show();
    });
    $('.overlay .close_icon').on('click', function() {
        var vid = document.getElementById("my-video");
        vid.pause();
    });
    $('.demochk ul li:nth-child(3n)').after('<li class="clear"></li>');
    $('.seimens_tab .tabs li[data-tab="tab-3"] ').one('click', function() {
        var winW = $(window).width();
        if (winW > 767) {
            var $children = $('#tab-3 .autocom .col-sm-4');
            for (var i = 0, l = $children.length; i < l; i += 3) {
                $children.slice(i, i + 3).wrapAll('<div class="parent-column"></div>');
            }
            var $childrentab2 = $('#tab-2 .autocom .col-sm-4');
            for (var i = 0, l = $children.length; i < l; i += 3) {
                $childrentab2.slice(i, i + 3).wrapAll('<div class="parent-column"></div>');
            }
            var $children = $('#tab-3 .autocom .info ');
            for (var i = 0, l = $children.length; i < l; i += 3) {
                $children.slice(i, i + 3).wrapAll('<div class="parent"></div>');
            }
        }
    });
    $('div.item.divc').on('click', function(event) {
        var acc_val = $(this).attr("id");
        $('div.info').slideUp();
        $('.item.divc').find('p').css('padding-bottom', '10px');
        $('.item.divc').css('margin-bottom', '10px');
        if ($('div.info.' + acc_val).is(':hidden') == true) {
            $('div.info.' + acc_val).slideDown('100');
            $(this).find('p').css('padding-bottom', '20px');
            $(this).css('margin-bottom', '0px');
        }
    });
    $('ul.tabs li').click(function(event) {
        var tab_id = $(this).attr('data-tab');
        $('ul.tabs li').removeClass('current');
        $('.tab-content').removeClass('current');
        $(this).addClass('current');
        $("#" + tab_id).addClass('current');
        event.preventDefault();
    });
    $('#news-gallery').owlCarousel({
        loop: true,
        margin: 10,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
                nav: true
            },
            600: {
                items: 3,
                nav: false
            },
            1000: {
                items: 3,
                nav: true,
                loop: false
            }
        }
    });
    $('.lftvideo').click(function(e) {
        $('.overlay').fadeIn();
    });
    $('.close_icon').click(function(e) {
        $('.overlay').fadeOut();
    });
    $('.videopopup').eq(0).children('iframe').attr('src', 'https://www.youtube.com/embed/SMeu1h3koB0');
    $('.video_container a').on('click', function() {
        var getTarget = $(this).data('target');
        var getFramesrc = $(this).data('iframe');
        // console.log(getFramesrc);
        $('.videopopup').children('iframe').attr('src', '');
        $('.videopopup').children('iframe').attr('src', getFramesrc);
    });
    $('.video_container a,.video_container .playicon').click(function(e) {
        $('.videopopup').fadeIn();
    });
    $('.videopopup .close_icon').click(function(e) {
        $('.videopopup').fadeOut();
        $('.videopopup').children('iframe').attr('src', '');
    });
    // reference for main items
    var slider = $('.slider');
    // reference for thumbnail items
    var thumbnailSlider = $('.thumbnailSlider');
    //transition time in ms
    var duration = 250;
    // carousel function for main slider
    slider.owlCarousel({
        loop: false,
        nav: false,
        items: 1
    }).on('changed.owl.carousel', function(e) {
        //On change of main item to trigger thumbnail item
        thumbnailSlider.trigger('to.owl.carousel', [e.item.index, duration, true]);
    });
    // carousel function for thumbnail slider
    thumbnailSlider.owlCarousel({
        loop: false,
        // center:true, //to display the thumbnail item in center
        nav: false,
        responsive: {
            0: {
                items: 3
            },
            600: {
                items: 4
            },
            1000: {
                items: 6
            }
        }
    }).on('click', '.owl-item', function() {
        // On click of thumbnail items to trigger same main item
        slider.trigger('to.owl.carousel', [$(this).index(), duration, true]);
    }).on('changed.owl.carousel', function(e) {
        // On change of thumbnail item to trigger main item
        slider.trigger('to.owl.carousel', [e.item.index, duration, true]);
    });
    //These two are navigation for main items
    $('.slider-right').click(function() {
        slider.trigger('next.owl.carousel');
    });
    $('.slider-left').click(function() {
        slider.trigger('prev.owl.carousel');
    });
    $("#feedmobile").change(function() {
        //alert(this.value);
        var number = this.value;
        $.ajax({
            url: '/siemens/get_user_data',
            data: ({
                'number': number
            }),
            dataType: "json",
            type: "post",
            success: function(data) {
                //alert(data);
                var fname = data[0].fullname;
                $("input#fullname").val(fname);
                var email = data[0].email;
                $("input#email").val(email)
                var loc = data[0].location;
                $("select#location option[value='" + loc + "']").attr('selected', 'selected');
            }
        });
        // $.ajax({
        // url: '/siemens/otp_feeduser_data',
        // data: ({'number': number}),
        // dataType: "json",
        // type: "post",
        // success: function(data){
        // rnext_load = data.num_str;
        // $('#feedmobile_error').slideDown().html('<span id="error">your otp send on your number.</span>');
        // }
        // });
    });
});

function rformotp() {
    //$("#rmobile").change(function(){
    //alert(this.value);
    //var number = this.value;
    var number = $('#rmobile').val();
    if (number != "") {
        $.ajax({
            url: '/siemens/otp_user_data',
            data: ({
                'number': number
            }),
            dataType: "json",
            type: "post",
            success: function(data) {
                //alert(data.number_reg);
                if (data.number_reg == "This number already register") {
                    $('#rmobile_error').slideDown().html('<span id="error">phone number already register</span>');
                } else {
                    next_load = data.num_str;
                    $(".error").html('');
                    $('#rmobile_otp').slideDown().html('<span id="error">your otp send on your number.</span>');
                    $(':input[type="submit"]').prop('disabled', false);
                    $('.send_button').hide();
                    $('.resend_button').show();
                }
            }
        });
    }
    //});
}

function reformotp() {
    var number = $('#rmobile').val();
    if (number != "") {
        $.ajax({
            url: '/siemens/otp_user_data',
            data: ({
                'number': number
            }),
            dataType: "json",
            type: "post",
            success: function(data) {
                //alert(data.number_reg);
                if (data.number_reg == "This number already register") {
                    $('#rmobile_error').slideDown().html('<span id="error">phone number already register</span>');
                } else {
                    next_load = data.num_str;
                    $(".error").html('');
                    $('#rmobile_otp').slideDown().html('<span id="error">your otp resend on your number.</span>');
                    //$(':input[type="submit"]').prop('disabled', false);
                    $('.resend_button').hide();
                }
            }
        });
    }
}

function rformSubmit() {
    var fname = $('#rfullname').val();
    var email = $('#remail').val();
    var phone = $('#rmobile').val();
    var loc = $('#rlocation').val();
    var sales_p_id = $('#sales_p_id').val();
    var otpcheck = next_load;
    // var pswrepeat=$('#pswrepeat').val();
    $(".error").html('');
    if (fname == "") {
        $('#rfull_error').slideDown().html("<span>Please type Name</span>");
        return false;
    }
    if (email == "") {
        $('#remail_error').slideDown().html('<span id="error">Please type email</span>');
        return false;
    }
    var filter = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
    if (!filter.test(email)) {
        $('#remail_error').slideDown().html('<span id="error">Please type correct email</span>');
        return false;
    }
    if (phone == "") {
        $('#rmobile_error').slideDown().html('<span id="error">Please type phone number</span>');
        return false;
    }
    var phoneRegex = /^[7-9]{1}[0-9]{9}$/;
    if (!phoneRegex.test(phone)) {
        $('#rmobile_error').slideDown().html('<span id="error">Please type correct phone number</span>');
        return false;
    }
    //alert(otpcheck);
    var otp = $('#otp').val();
    if (otp == "") {
        $('#otp_error').slideDown().html("<span>Please your otp</span>");
        return false;
    }
    if (otp != otpcheck) {
        $('#otp_error').slideDown().html("<span>Please enter same otp</span>");
        return false;
    }
    var dataString = 'rfullname=' + fname + '&remail=' + email + '&rmobile=' + phone + '&location=' + loc + '&sales_p_id=' + sales_p_id;
    $.ajax({
        url: '/siemens/user_submit',
        data: dataString,
        type: "post",
        success: function(data) {
            //alert(data);
            $("#userinput")[0].reset();
        }
    });
}
//new reg form..
function feed_r_form() {
    var fname = $('#rfullname').val();
    var email = $('#remail').val();
    var phone = $('#rmobile').val();
    var loc = $('#rlocation').val();
    var sales_p_id = $('#sales_p_id').val();
    var otpcheck = next_load;
    // var pswrepeat=$('#pswrepeat').val();
    $(".error").html('');
    if (fname == "") {
        $('#rfull_error').slideDown().html("<span>Please type Name</span>");
        return false;
    }
    if (email == "") {
        $('#remail_error').slideDown().html('<span id="error">Please type email</span>');
        return false;
    }
    var filter = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
    if (!filter.test(email)) {
        $('#remail_error').slideDown().html('<span id="error">Please type correct email</span>');
        return false;
    }
    if (phone == "") {
        $('#rmobile_error').slideDown().html('<span id="error">Please type phone number</span>');
        return false;
    }
    var phoneRegex = /^[7-9]{1}[0-9]{9}$/;
    if (!phoneRegex.test(phone)) {
        $('#rmobile_error').slideDown().html('<span id="error">Please type correct phone number</span>');
        return false;
    }
    //alert(otpcheck);
    var otp = $('#otp').val();
    if (otp == "") {
        $('#otp_error').slideDown().html("<span>Please your otp</span>");
        return false;
    }
    if (otp != otpcheck) {
        $('#otp_error').slideDown().html("<span>Please enter same otp</span>");
        return false;
    }
    var dataString = 'rfullname=' + fname + '&remail=' + email + '&rmobile=' + phone + '&location=' + loc + '&sales_p_id=' + sales_p_id;
    $.ajax({
        url: '/siemens/user_submit',
        data: dataString,
        dataType: "json",
        type: "post",
        success: function(data) {
            //console.log(data);
            $('.u_registration').hide();
            $('.u_feedback').show();
            var fname = data['fullname'];
            $("input#fullname").val(fname);
            var email = data['email'];
            $("input#email").val(email)
            var phone = data['mobile'];
            $("input#feedmobile").val(phone);
            var loc = data['location'];
            $("select#location option[value='" + loc + "']").attr('selected', 'selected');
        }
    });
}
// feedback form..
function feedformSubmit() {
    var fname = $('#fullname').val();
    var email = $('#email').val();
    var phone = $('#feedmobile').val();
    var loc = $('#location').val();
    var feed1 = $('input[name=feed1]:checked').val();
    var feed2 = $('input[name=feed2]:checked').val();
    var feed3 = $('input[name=feed3]:checked').val();
    var feed4 = $('input[name=feed4]:checked').val();
    var feed5 = $('input[name=feed5]:checked').val();
    //var otpcheck = rnext_load;
    $(".error").html('');
    if (fname == "") {
        $('#fullname_error').slideDown().html("<span>Please type Name</span>");
        return false;
    }
    if (email == "") {
        $('#email_error').slideDown().html('<span id="error">Please type email</span>');
        return false;
    }
    var filter = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
    if (!filter.test(email)) {
        $('#email_error').slideDown().html('<span id="error">Please type correct email</span>');
        return false;
    }
    if (phone == "") {
        $('#feedmobile_error').slideDown().html('<span id="error">Please type phone number</span>');
        return false;
    }
    var phoneRegex = /^[7-9]{1}[0-9]{9}$/;
    if (!phoneRegex.test(phone)) {
        $('#feedmobile_error').slideDown().html('<span id="error">Please type correct phone number</span>');
        return false;
    }
    //alert(otpcheck);
    // var otp=$('#otp').val();
    // if(otp=="")
    // {
    // $('#otp_error').slideDown().html("<span>Please your otp</span>");
    // return false;
    // }
    // if(otp!=otpcheck){
    // $('#otp_error').slideDown().html("<span>Please enter same otp</span>");
    // return false;
    // }
    var dataString = 'fullname=' + fname + '&email=' + email + '&feedmobile=' + phone + '&location=' + loc + '&feed1=' + feed1 + '&feed2=' + feed2 + '&feed3=' + feed3 + '&feed4=' + feed4 + '&feed5=' + feed5;
    alert(dataString);
    $.ajax({
        url: '/siemens/user_data_submit',
        data: dataString,
        dataType: "json",
        type: "post",
        success: function(data) {
            alert(data);
        }
    });
}