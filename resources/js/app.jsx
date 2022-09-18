import './bootstrap';
import React from 'react';
import  ReactDOM  from 'react-dom';
import Navbar from './components/Navbar';


if(document.getElementById('navb')){
    ReactDOM.render(<Navbar />, document.getElementById('navb'));
}


