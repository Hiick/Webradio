import { NgModule, ErrorHandler } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';
import { IonicApp, IonicModule, IonicErrorHandler } from 'ionic-angular';
import { MyApp } from './app.component';

//facebook button

import { SocialLoginModule, AuthServiceConfig, FacebookLoginProvider } from 'angularx-social-login';



import { AboutPage } from '../pages/about/about';
import { ContactPage } from '../pages/contact/contact';
import { HomePage } from '../pages/home/home';
import { TabsPage } from '../pages/tabs/tabs';

import { StatusBar } from '@ionic-native/status-bar';
import { SplashScreen } from '@ionic-native/splash-screen';
import { RegisterPage } from '../pages/register/register';


//FACEBOOK
const config = new AuthServiceConfig([
 {
   id: FacebookLoginProvider.PROVIDER_ID,
   provider: new FacebookLoginProvider('2203659926599837')
 }
]);

export function provideConfig() {
 return config;
}
//ENDFB
@NgModule({
  declarations: [
    MyApp,
    AboutPage,
    ContactPage,
    HomePage,
    TabsPage,
    RegisterPage,
  ],
  imports: [
    BrowserModule,
    SocialLoginModule, //FB
    IonicModule.forRoot(MyApp),
  ],
  bootstrap: [IonicApp],
  entryComponents: [
    MyApp,
    AboutPage,
    ContactPage,
    HomePage,
    TabsPage,
    RegisterPage
  ],
  providers: [
    StatusBar,
    SplashScreen,
    {provide: ErrorHandler, useClass: IonicErrorHandler},
    //FB
    {
     provide: AuthServiceConfig,
     useFactory: provideConfig
    }
    //ENDFB
  ]
})
export class AppModule {}
