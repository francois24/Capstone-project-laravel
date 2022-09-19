import React from 'react';
import image from '../../../media/justineLogoImg1.png'
import '../../../css/Footer.css'
import { MDBFooter, MDBContainer, MDBRow, MDBCol } from 'mdb-react-ui-kit';

export default function App() {
  return (
    <MDBFooter bgColor='dark' className='text-center text-lg-start text-muted '>
      <section className='d-flex justify-content-center justify-content-lg-between pt-4 py-4 m-auto' >
        <div className='me-5 d-none d-lg-block'>

        </div>

      </section>

      <section className='Footer1'>
        <MDBContainer className='text-center text-md-start mt-5'>
          <MDBRow className='mt-3 m-auto'>
            <MDBCol md="4" lg="3" xl="3" className='mx-auto mb-4'>
            <div className='mx-5'>
            <img src={image} height={100} width={120} alt="imagelogo"/><br/>
           
            
             <span className='span1'> Copyright © 2018 </span> <br/>
             <span className='span1'>  RentCar.All Rights </span> <br/>  
             <span className='span1'>Reserved.</span>  
             </div>
            </MDBCol>

            <MDBCol md="3" lg="2" xl="2" className='mx-auto mb-4 usefullink'>
              <h6 className='text-uppercase fw-bold mb-4'>USEFUL LINKS</h6>
              <p>
                <a href='#!' className='text-reset'>
                  About Us
                </a>
              </p>
              <p>
                <a href='#!' className='text-reset'>
                  Our Services
                </a>
              </p>
              <p>
                <a href='#!' className='text-reset'>
                  Information
                </a>
              </p>
              <p>
                <a href='#!' className='text-reset'>
                  Privary Policy
                </a>
              </p>
            </MDBCol>

            <MDBCol md="3" lg="2" xl="2" className='mx-auto mb-4 usefullink '>
              <h6 className='text-uppercase mb-4 '>OUR TEAMS</h6>
              <p>
                <a href='#!' className='text-reset'>
                  Support
                </a>
              </p>
              <p>
                <a href='#!' className='text-reset'>
                  Contacts
                </a>
              </p>
              <p>
                <a href='#!' className='text-reset'>
                Typography
                </a>
              </p>
              <p>
                <a href='#!' className='text-reset'>
                  FAQ
                </a>
              </p>
            </MDBCol>

            <MDBCol md="3" lg="2" xl="2" className='mx-auto mb-4 usefullink'>
              <h6 className='text-uppercase fw-bold mb-4 usefullink2'>SOCIAL MEDIA</h6>
              <p>
              <a href='#!' >
                <i className='fab fa-twitter'>
                <span className='mx-3'>Twitter</span></i></a>
              </p>
              <p>
                <a href='#!' ><i className='fab fa-instagram'>
                <span className='mx-3'>Instagram</span></i></a>
              </p>

              <p>
              <a href='#!'><i className='fab fa-facebook-f'>
              <span className='mx-3'>Facebook</span></i></a>
              </p>
              
              <p>
                <a href="#">
                <i className='fab fa-youtube'><span className='mx-3'>Youtube</span></i>
                </a>
              </p>
            </MDBCol>
          </MDBRow>
        </MDBContainer>
      </section>

      <div className='text-center p-4 bg-dark'>
      </div>
    </MDBFooter>
  );
}