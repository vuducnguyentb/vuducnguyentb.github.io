import { HttpClient } from '@angular/common/http';

import { Component ,OnInit} from '@angular/core';
import { MyServiceService } from './service/my-service.service';
import { Observable } from 'rxjs';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})
export class AppComponent implements OnInit{
  title = 'main';
  datatoService;
  person=[
    {
      name:'Nguyên',
      age:26
    },
    {
      name:'Hạnh',
      age:22
    },
    {
      name:'Ling',
      age:22
    }
  ];
 data2=[];
  change(){
    this.person[0].name="US and THem";
    this.person[1].name="You and me";
    this.person[2].name="Death slicen";
  }
  constructor(private myservice: MyServiceService){

  }
  ngOnInit(){
      this.getdata2();
  }
  getdata2() {
    this.myservice.getData().subscribe(
      data => {
        this.data2 = data;
        console.log(this.data2);
      }
    );

}
}
