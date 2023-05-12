<!DOCTYPE html>
<HTML lang="fr">
	<HEAD>
		<meta charset="utf-8" />
		<meta name="google-signin-client_id" content="200504414713-2eul6gujkfmfegiep91h2ea4a5htmorv.apps.googleusercontent.com">
		<script src="https://apis.google.com/js/api.js"></script>
		<script src="https://apis.google.com/js/client:platform.js?onload=renderButton" async defer></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

		
				
	</HEAD>

	<BODY>
		<script>
			function onSuccess(googleUser) {
				var profile = googleUser.getBasicProfile();
				gapi.client.load('plus', 'v1', function () {
					var request = gapi.client.plus.people.get({
						'userId': 'me'
					});
					//Display the user details
					request.execute(function (resp) {
					
						var profileHTML = '<div class="profile"><div class="head">Welcome '+resp.name.givenName+'! <a href="javascript:void(0);" onclick="signOut();">Sign out</a></div>';
						profileHTML += '<img src="'+resp.image.url+'"/><div class="proDetails"><p>'+resp.displayName+'</p><p>'+resp.emails[0].value+'</p><p>'+resp.gender+'</p><p>'+resp.id+'</p><p><a href="'+resp.url+'">View Google+ Profile</a></p></div></div>';
						$('.userContent').html(profileHTML);
						$('#gSignIn').slideUp('slow');
					});
				});
			}
			function onFailure(error) {
				alert(error);
			}
			function renderButton() {
				gapi.signin2.render('gSignIn', {
					'scope': 'profile email',
					'width': 240,
					'height': 50,
					'longtitle': true,
					'theme': 'dark',
					'onsuccess': onSuccess,
					'onfailure': onFailure
				});
			}
			function signOut() {
				var auth2 = gapi.auth2.getAuthInstance();
				auth2.signOut().then(function () {
					$('.userContent').html('');
					$('#gSignIn').slideDown('slow');
				});
			}
		</script>
		
		<div id="bloc_page">

			<div id="gSignIn"></div>		
			<div class="userContent"></div>

			<!--
			goo.gl/2TdxK8
			Sign-In Branding Guidelines
			goo.gl/Ne54oh
			.signIn()

			Sample code
			goo.gl/KTme3p
			 -->
			
		</div> <!-- div bloc_page -->
	
	</BODY>

</HTML>