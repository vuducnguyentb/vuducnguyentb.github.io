import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import {HttpClientModule} from '@angular/common/http';
import { AppComponent } from './app.component';
import { HomeComponent } from './home/home.component';
import { TourComponent } from './tour/tour.component';
import { OkModule } from './constant/ok.module';

@NgModule({
  declarations: [
    AppComponent,
    HomeComponent,
    TourComponent
  ],
  imports: [
    BrowserModule,
    HttpClientModule,
    OkModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
