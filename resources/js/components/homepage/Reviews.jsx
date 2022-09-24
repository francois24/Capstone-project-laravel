import { red } from "@mui/material/colors";
import React, { Component } from "react";
import Slider from "react-slick";
// import ComplexGrid from "./ReviewSlider";
import '../../../css/Rentalfleets.css'
import Revrev from './Revrev'
import 'animate.css';


export default class Reviews extends Component {
  render() {
    const settings = {
      dots: true,
      infinite: true,
      speed: 500,
      arrows: false,
      slidesToShow: 1,
      slidesToScroll: 1
    };
    return (
      <div className="revall"><br/>
        <div className='fleetjd revem'>
          <h3 className='fleetle animate__animated animate__bounce'>CUSTOMER REVIEWS</h3>
          <em className='emflt'>Luxury RentCar Rental Services</em>
        </div >
        <Slider className="revslck" {...settings}>
          <div>
            <h3><Revrev/></h3>
          </div>
          <div>
            <h3><Revrev/></h3>
          </div>
          <div>
            <h3><Revrev/></h3>
          </div>
          <div>
            <h3><Revrev/></h3>
          </div>
        </Slider>
      </div>
    );
  }
}