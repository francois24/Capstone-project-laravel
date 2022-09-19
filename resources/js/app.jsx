import './bootstrap';
import React from 'react';
import  ReactDOM  from 'react-dom';
import Navbar from './components/Navbar';
import Ourbenefits from './components/homepage/Ourbenefits';
import Rentalworks from './components/homepage/Rentalworks';
import Rentalfleets from './components/homepage/Rentalfleets';
import Latestnews from './components/homepage/Latestnews';
import RentalServ from './components/homepage/Rentalserv';
import Reviews from './components/homepage/Reviews';
import Carslick from './components/homepage/Carslick';
import Banner from './components/homepage/Banner';


if(document.getElementById('bann')){
    ReactDOM.render(<Banner />, document.getElementById('bann'));
}


if(document.getElementById('carslick')){
    ReactDOM.render(<Carslick />, document.getElementById('carslick'));
}

if(document.getElementById('navb')){
    ReactDOM.render(<Navbar />, document.getElementById('navb'));
}


if(document.getElementById('ourb')){
    ReactDOM.render(<Ourbenefits />, document.getElementById('ourb'));
}


if(document.getElementById('rentalw')){
    ReactDOM.render(<Rentalworks />, document.getElementById('rentalw'));
}


if(document.getElementById('rentalf')){
    ReactDOM.render(<Rentalfleets />, document.getElementById('rentalf'));
}

if(document.getElementById('rentalserv')){
    ReactDOM.render(<RentalServ />, document.getElementById('rentalserv'));
}

if(document.getElementById('review')){
    ReactDOM.render(<Reviews />, document.getElementById('review'));
}



if(document.getElementById('latestn')){
    ReactDOM.render(<Latestnews />, document.getElementById('latestn'));
}



