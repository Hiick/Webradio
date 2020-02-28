import { Component } from '@angular/core';
import { IonicPage, NavController, NavParams } from 'ionic-angular';

//http
import { HttpClient } from '@angular/common/http';
//import { Response } from '@angular/http';//Headers RequestOptions
//import { map } from 'rxjs/operators';


/**
 * Generated class for the RegisterPage page.
 *
 * See https://ionicframework.com/docs/components/#navigation for more info on
 * Ionic pages and navigation.
 */

@IonicPage()
@Component({
  selector: 'page-register',
  templateUrl: 'register.html',
})
export class RegisterPage {

  constructor(public navCtrl: NavController, public navParams: NavParams, private http: HttpClient) {
  }

  ionViewDidLoad() {
    console.log('ionViewDidLoad RegisterPage');
  }

  requestFacebook() {
    //Http.get('/someUrl', config).then(successCallback, errorCallback);
    return this.http.get("http://localhost:3000/auth/facebook").subscribe((data) => {
      console.log(data)
      
    });
  }
}
