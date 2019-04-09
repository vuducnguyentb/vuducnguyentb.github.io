import { Injectable } from "@angular/core";
import { HttpClient } from "@angular/common/http";
import { Observable } from 'rxjs';

@Injectable({
  providedIn: "root"
})
export class MyServiceService {
  result;
  constructor( private HttpClient: HttpClient) {}
  // getData() {
  //   return this.http
  //     .get(
  //       "http://api.openweathermap.org/data/2.5/weather?appid=6205e114bab3d0275f8c0b959bdfc229&units=metric&q=SaiGon"
  //     )
  //     .subscribe(data => {
  //       console.log(data);
  //       this.result = data;
  //     });
  // }
    getData(): Observable<any> {
        const urlApi: any = "http://api.openweathermap.org/data/2.5/weather?appid=6205e114bab3d0275f8c0b959bdfc229&units=metric&q=SaiGon";
        return this.HttpClient.get(urlApi);
        console.log("sao lại đéo ra");


    }

}
