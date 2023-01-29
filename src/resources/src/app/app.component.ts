import { HomeService } from './home/home.service';
import { Component } from '@angular/core';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})
export class AppComponent {
  title = 'resources';
  constructor(private homeService:HomeService){

  }
  onSend(name:string){
    const formData : FormData = new FormData()
    formData.append('name' , name)
    this.homeService.onSendService(formData).subscribe

    (
      res=>{
        console.log(res)
      },
      error=>{
        console.log(error)
      }
    )
  }
  onGetUser(){
    this.homeService.getUser().subscribe
    (
      res=>{
        console.log(res)
      },
      error=>{
        console.log(error)
      }
    )
  }
}
