    // Initialize Firebase
    var firebaseConfig = {
			apiKey: "AIzaSyDlXguObtybLY9cMGBj6dSvk5JcO7-m4AY",
			authDomain: "saregama-web.firebaseapp.com",
			databaseURL: "https://saregama-web.firebaseio.com",
			projectId: "saregama-web",
			storageBucket: "saregama-web.appspot.com",
			messagingSenderId: "90447442091",
			appId: "1:90447442091:web:725fbbb6b8006088f4c7ee",
			measurementId: "G-5ELG37ZMDK"
		  };
		  // Initialize Firebase
		  firebase.initializeApp(firebaseConfig);
		  
		  
  //================for Firebase Logins Start===================================
  var ui = new firebaseui.auth.AuthUI(firebase.auth());
	
  var uiConfig = {
  callbacks: {
    signInSuccessWithAuthResult: function(authResult, redirectUrl) {
      // User successfully signed in.
      // Return type determines whether we continue the redirect automatically
      // or whether we leave that to developer to handle.
	  ajaxcntrl(authResult);
	  console.dir(authResult);
	  $("#firebase_mobile").hide();
	  $('.fancybox-close').click();
	  $('.close').click();
      //return true;
    },
    uiShown: function() {
      // The widget is rendered.
      // Hide the loader.
      document.getElementById('loader').style.display = 'none';
    }
  },
  // Will use popup for IDP Providers sign-in flow instead of the default, redirect.
  signInFlow: 'popup',
  signInSuccessUrl: '',
  signInOptions: [
	{
    // Leave the lines as is for the providers you want to offer your users.
    // firebase.auth.GoogleAuthProvider.PROVIDER_ID,
    // firebase.auth.FacebookAuthProvider.PROVIDER_ID,
    // firebase.auth.TwitterAuthProvider.PROVIDER_ID,
    // firebase.auth.GithubAuthProvider.PROVIDER_ID,
    // firebase.auth.EmailAuthProvider.PROVIDER_ID,
    provider: firebase.auth.PhoneAuthProvider.PROVIDER_ID,
	recaptchaParameters: {
        type: 'image', // 'audio'
        size: 'invisible', // 'invisible' or 'compact'
        badge: 'bottomleft' //' bottomright' or 'inline' applies to invisible.
    },
	defaultCountry: 'IN'
	}
  ],
  // signInOptions: [
    // // Leave the lines as is for the providers you want to offer your users.
    // // firebase.auth.GoogleAuthProvider.PROVIDER_ID,
    // // firebase.auth.FacebookAuthProvider.PROVIDER_ID,
    // // firebase.auth.TwitterAuthProvider.PROVIDER_ID,
    // // firebase.auth.GithubAuthProvider.PROVIDER_ID,
    // // firebase.auth.EmailAuthProvider.PROVIDER_ID,
    // firebase.auth.PhoneAuthProvider.PROVIDER_ID
  // ],
  
  // Terms of service url.
  tosUrl: '',//'<your-tos-url>',
  // Privacy policy url.
  privacyPolicyUrl: '',//'<your-privacy-policy-url>'
};

// ui.start('#firebaseui-auth-container', uiConfig);
//================for Firebase Logins End===================================

//=============insert to DB =======================
function ajaxcntrl(param){
	// var obj = JSON.parse(param);
	var obj = param;
	console.dir(obj);
	var uid = obj.user.uid;
	var phone = obj.user.phoneNumber;
	var idToken = obj.user.ma;
	
	$.post(config.SITEPATH + "ajax?action=view&type=firebase_mobile", {
                    'uid': uid,
                    'idToken': idToken,
                    'phone': phone
                }, function(data) {
                    $("#ajax_loader").hide();
                    if (data != "") {
                        if (data != 0 && data != null) {
                            data = JSON.parse(data);
                            var name = data.LISTENERNAME;
                            var socialid = data.LISTENERSOCIALID;
                            var listenerid = data.LISTENERID;
                            var listenereid = data.LISTENEREID;
                            var listenerimage = data.LISTENERIMAGE;
                            var listenerfname = data.LISTENERFNAME;
                            var social_type = data.SOCIAL_TYPE;
                            FBTOKEN = data.FBACCESSTOKEN;
                            if (listenerimage == "") {
                                listenerimage = 'http://graph.facebook.com/' + socialid + '/picture?type=square';
                            }
                            $.cookie("srgm_uname", name, {
                                expires: 365,
                                path: '/'
                            });
                            $.cookie("srgm_uid", listenerid, {
                                expires: 365,
                                path: '/'
                            });
                            $.cookie("srgm_euid", listenereid, {
                                expires: 365,
                                path: '/'
                            });
                            $.cookie("srgm_sid", socialid, {
                                expires: 365,
                                path: '/'
                            });
                            $.cookie("srgm_simg", listenerimage, {
                                expires: 365,
                                path: '/'
                            });
                            $.cookie("srgm_fname", listenerfname, {
                                expires: 365,
                                path: '/'
                            });
							$.cookie("srgm_stype", 'FRBS', {
                                expires: 365,
                                path: '/'
                            });
                            $("#loginLI").html('<a data-pjax href="' + config.SITEPATH + 'download" class="nmUser srgm_wrap loggedIn" title="' + listenerfname + ' Download Manager">' + web.sub_str({
                                'start': 0,
                                'limit': 7,
                                'string': listenerfname
                            }) + '</a><a class="logout" href="javascript:void(0);" data-toggle="modal" data-target=".newSgPopup" data-showPopup="logoutPopupContainer" title="Sign out" >Sign out</a>');
                            //$("#signupLI").html('<span class="circle userImg"><img src="' + listenerimage + '" width="45" height="43" class="imgBlock" /></span>');
                            $("#signupLI").html('');
                            web.ga({
                                'ga_type': 'event',
                                'btn_category': 'login',
                                'btn_action': 'login',
                                'btn_name': social_type,
                                'btn_val': 1
                            });
                            /*Adding UserId to GA*/
                            web.ga({
                                'ga_type': 'setuser',
                                'ga_userId': listenerid
                            });
                            isLoggedIn = true;
                            /*LOAD USERS CART ITEMS*/
                            web.addToCartOnLoad();
                            if (typeof(callbackSuccess) != 'undefined' && callbackSuccess != null && callbackSuccess != '') {
                                // ---START Only For MailToFriend
                                if (callbackSuccess.indexOf('web.sendMailToFriend') == 0) {
                                    $(".popupContainer").html('<!-- Email popup starts --> <div id="emailPopupContainer" class="subPopup"> <div class="popupHeading clearfix"> <h2 class="shareSubTitle">Hurray! My Favourite song is available on saregama.com</h2> </div> <div class="shareTitle clearfix"> <span class="shrIco icon-envelope"/> <div class="shrTitle"> <h3 class="title">Email</h3> <b class="sharePlayTitle">Phoolon ke rang se - Prem Pujari</b> </div> </div> <div class="popupCont"> <div class="formGroup"> <label class="control-label">Friend\'s Email Address</label> <div class="controls"> <div class="input-group"> <input type="text" class="form-control" id="fEmail" name="email" placeholder="To" value=""/> <span class="errMsg email_err"/> </div> </div> <div class="controls"> <div class="input-group"> <textarea name="msg" id="fMsg" class="" rows="7" cols="78" placeholder="Your message here"/></textarea> <span class="errMsg email_msg_err"/> </div> </div> </div> <div class="formBtn"> <button type="submit" id="shareEmail" class="btn btn-default btn-lg inputMdBtn">Send</button> <button type="reset" data-dismiss="modal" class="btn btn-default btn-lg inputMdBtn ltGray">Cancel</button> </div> <div id="notifDivSucc" class="text-success"/> <div id="notifDivErr" class="text-danger"/> </div> </div> <!-- Email Popup Ends -->');
                                    $("#fMsg").val(share_by_email.msg);
                                    $("#fEmail").val(share_by_email.email);
                                    $("#emailPopupContainer").show();
                                }
                                //---END Only For MailToFriend
                                setTimeout(function() {
                                    eval(callbackSuccess);
                                    callbackSuccess = "";
                                    callbackFailure = "";
                                }, 1000);
                            } else {
                                $('.close').click();
                            }
                        } else {
                            $("#ajax_loader").hide();
                            alert("Something went wrong! Please try again.");
                            try {
                                web.logout();
                            } catch (err) {}
                        }
                    }
                    $('.close').click();
                });
}


// var initApp = function() {
  // document.getElementByClassName('logout').addEventListener('click', function() {
	// firebase.auth().signOut();
  // });
// };

// window.addEventListener('load', initApp);

//=============insert to DB =======================
