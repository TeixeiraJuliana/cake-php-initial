import { Injectable } from "@angular/core";
import {HttpClient } from '@angular/common/http';
import { Observable } from "rxjs/internal/Observable";

@Injectable({
  providedIn: 'root'
})
export class HomeService {

  constructor(private http:HttpClient){}

  onSendService(fromData: FormData):Observable<any>
  {
    return this.http.post<any>('http://cakephpinitial/users/add' , fromData)
  }
  getUser():Observable<any>
  {
    return this.http.get<any>('http://cakephpinitial/users/add')
  }

}
