import { users } from './user.model';
import { Injectable } from "@angular/core";
import { map } from "rxjs/operators";
import { HttpClient } from '@angular/common/http';

@Injectable({
  providedIn: 'root'
})
export class RegisterService {

  baseUrl:string = 'http://localhost:4200/'
  constructor(private http:HttpClient){}

  public onSendRegister (name:any, email:any, password:any) //(fromData: FormData):Observable<any>
  {
    return this.http.post<any>(
      this.baseUrl + 'register',
      {
        name, email, password
      }
    )
    .pipe(map((users =>{
      return users
    })))
  }


}
