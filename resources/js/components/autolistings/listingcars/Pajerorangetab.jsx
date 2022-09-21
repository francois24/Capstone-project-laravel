import React from 'react'
import { Container, Row, Col} from 'react-bootstrap'
import Descrptab from './Descrptab'
import Pajerodate from './Pajerodate'
import 'react-datepicker/dist/react-datepicker.css';
import './descrptab.css'

const Pajerorangetab = () => {
  return (
    <div className='listingsallcars'>
        <div className='listcarbg'>
                <div className='listoverlay'>
                    <h1>Rent now</h1>
                </div>
            </div>
        <div>
        <Container>
            <Row>
                <Col lg={9}>
                    <div className='text-center mb-5'><h1 className='car2title'>Pajero Range</h1></div>
                    <div className='imglistings'><img src='https://snipboard.io/d6fLI7.jpg' alt='' /></div>
                    <div><Descrptab/></div>
                </Col>
                <Col lg={3}>
                    <div className='rentsec2'>
                        <div className='rentperday'><h4>&#8369;&nbsp;1,000 / per day</h4></div>
                        <div className='rentncont'>
                            <div className='pckdate'>
                                <Pajerodate />
                            </div>
                        </div>
                    </div>
                </Col>
            </Row>
        </Container>
        </div>
    </div>
  )
}

export default Pajerorangetab
