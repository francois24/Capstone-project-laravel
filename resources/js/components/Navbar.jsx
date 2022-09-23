import React, { useState } from 'react';
import Logo from '../../media/jusLogoImg.png';
import '../../css/Navbar.css';


function Navbar() {
  const [click, setClick] = useState(false);
  const handleClick = () => setClick(!click);
  const closeMobileMenu = () => setClick(false);

  return (
    <>
      <nav className='navbar d-flex justify-content-between'>
        <a href='/' onClick={closeMobileMenu}>
            <img className='navbar-logo' src={Logo} alt='Rental Car'/>
          
        </a>
        <div className='menu-icon' onClick={handleClick}>
          <i className={click ? 'fas fa-times' : 'fas fa-bars'} />
        </div>

        <ul className={click ? 'nav-menu active' : 'nav-menu'}>
        
          <li className='nav-item'>
            <a href='/#'
              className='nav-links'
            >
              HOME
            </a>
          </li>
          
          <li className='nav-item'>
            <a href='/autolistings'
              className='nav-links'
            >
              AUTOLISTINGS
            </a>
          </li>
         
          <li className='nav-item'>
            <a href='/#indexaboutus'
              className='nav-links'
            >
              ABOUT&#160;US
            </a>
          </li>

          <li className='nav-item'>
            <a href='/#testimonials'
              className='nav-links'
            >
              TESTIMONIALS
            </a>
          </li>

          <li className='nav-item'>
            <a href='/news'
              className='nav-links'
            >
              NEWS
            </a>
          </li>

          <li className='nav-item'>
            <a href='/contact'
              className='nav-links'
            >
             CONTACT&#160;US
            </a>
          </li>

        </ul>
       
      </nav>
    </>
  );
}

export default Navbar