import { RegisterService } from './register.service';
import { Component } from '@angular/core';
import { FormGroup, FormControl, FormBuilder, Validator, NgForm } from "@angular/forms";
import { Router } from '@angular/router';
import { first } from 'rxjs';




@Component({
  selector: 'app-register',
  templateUrl: './register.component.html',
  styleUrls: ['./register.component.css'],

})
export class RegisterComponent {

  angForm : FormGroup

  constructor(
    private fb: FormBuilder,
    private registerService: RegisterService,
    private router: Router

  ){
    this.angForm = this.fb.group({
      id: '',
      name: '',
      email:'',
      password:''

      //: ['', Validator.required],

    })
  }

  ngOnInit(): void{

  }
  postData(angForm:any){
    // this.registerService.onSendRegister(
    //   angForm.value.
    // )
    //.pipe(first())

    // .subscribe(data =>
    //   { this.router.navigate(['login']) }
    //   res=>{ console.log(res)},
    //   error=>{ console.log(error)}
    // )
  }
}
