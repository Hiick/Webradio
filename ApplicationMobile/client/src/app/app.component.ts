import { Component, OnInit } from '@angular/core';
import { Platform } from 'ionic-angular';
import { StatusBar } from '@ionic-native/status-bar';
import { SplashScreen } from '@ionic-native/splash-screen';

//import { TabsPage } from '../pages/tabs/tabs';

//fb
import { AuthService, FacebookLoginProvider, SocialUser } from 'angularx-social-login';


import { RegisterPage } from '../pages/register/register';

@Component({
  templateUrl: 'app.html'
})

export class MyApp {

  rootPage:any = RegisterPage;

  constructor(platform: Platform, statusBar: StatusBar, splashScreen: SplashScreen) {
    platform.ready().then(() => {
      // Okay, so the platform is ready and our plugins are available.
      // Here you can do any higher level native things you might need.
      statusBar.styleDefault();
      splashScreen.hide();
    });
  }
}

export class AppComponent implements OnInit {
  user: SocialUser;
  loggedIn: boolean;

  constructor(private authService: AuthService) { 

    
  }
}

// export class MyApp { //ORIGINAL

//   rootPage:any = RegisterPage;

//   constructor(platform: Platform, statusBar: StatusBar, splashScreen: SplashScreen) {
//     platform.ready().then(() => {
//       // Okay, so the platform is ready and our plugins are available.
//       // Here you can do any higher level native things you might need.
//       statusBar.styleDefault();
//       splashScreen.hide();
//     });
//   }
// }