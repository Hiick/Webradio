import { NgModule } from '@angular/core';
import { IonicPageModule } from 'ionic-angular';
import { RegisterPage } from './register';
//FB
import { MatButtonModule } from "@angular/material/button";
import { MatIconModule } from "@angular/material/icon";
import { MatCardModule } from "@angular/material/card";
//ENDFB
//fb
//import { AuthService, FacebookLoginProvider, SocialUser } from 'angularx-social-login';

@NgModule({
  declarations: [
    RegisterPage,
  ],
  imports: [
    IonicPageModule.forChild(RegisterPage),
    MatIconModule,
    MatButtonModule,
    MatCardModule
  ],
})
export class RegisterPageModule {}
