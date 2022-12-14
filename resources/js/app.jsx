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
import Footer from './components/homepage/Footer';
import Contact from './components/Contact';
import News from './components/News'
import Newsford from './components/news/Newsford';
import Newstoyota from './components/news/Newstoyota';
import Newsporsche from './components/news/Newsporsche';
import Newsdealer from './components/news/Newsdealer';
import Autolistings from './components/Autolistings'
import Forestertab from './components/autolistings/listingcars/Forestertab';
import Miragerangetab from './components/autolistings/listingcars/Miragerangetab';
import Mitsubishilancer1 from './components/autolistings/listingcars/Mitsubishilancertab';
import Pajerorangetab from './components/autolistings/listingcars/Pajerorangetab';
import Subarulibertytab from './components/autolistings/listingcars/Subarulibertytab';
import Xvrangetab from './components/autolistings/listingcars/Xvrangetab';

if(document.getElementById('xvrangetab')){
    ReactDOM.render(<Xvrangetab />, document.getElementById('xvrangetab'));
}

if(document.getElementById('subaruliberty')){
    ReactDOM.render(<Subarulibertytab />, document.getElementById('subaruliberty'));
}

if(document.getElementById('pajerorange')){
    ReactDOM.render(<Pajerorangetab />, document.getElementById('pajerorange'));
}

if(document.getElementById('mitsubishilancer')){
    ReactDOM.render(<Mitsubishilancer1 />, document.getElementById('mitsubishilancer'));
}

if(document.getElementById('miragerange')){
    ReactDOM.render(<Miragerangetab />, document.getElementById('miragerange'));
}

if(document.getElementById('forestertab')){
    ReactDOM.render(<Forestertab />, document.getElementById('forestertab'));
}

if(document.getElementById('autolist')){
    ReactDOM.render(<Autolistings />, document.getElementById('autolist'));
}

if(document.getElementById('newsporsche')){
    ReactDOM.render(<Newsporsche />, document.getElementById('newsporsche'));
}

if(document.getElementById('newstoyota')){
    ReactDOM.render(<Newstoyota />, document.getElementById('newstoyota'));
}

if(document.getElementById('newsdealer')){
    ReactDOM.render(<Newsdealer />, document.getElementById('newsdealer'));
}

if(document.getElementById('newsford')){
    ReactDOM.render(<Newsford />, document.getElementById('newsford'));
}

if(document.getElementById('newslist')){
    ReactDOM.render(<News />, document.getElementById('newslist'));
}

if(document.getElementById('bann')){
    ReactDOM.render(<Banner />, document.getElementById('bann'));
}

if(document.getElementById('contact')){
    ReactDOM.render(<Contact />, document.getElementById('contact'));
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



if(document.getElementById('footr')){
    ReactDOM.render(<Footer />, document.getElementById('footr'));
}




