import React from 'react'
import { Container, Row, Col} from 'react-bootstrap'
import 'react-datepicker/dist/react-datepicker.css';
import Descrptab from './Descrptab'
import Mitsubishidate from './Mitsubishidate'
import './descrptab.css'

const Mitsubishilancer1 = () => {
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
                    <div className='text-center mb-5'><h1 className='car2title'>Mitsubishi Lancer</h1></div>
                    <div className='imglistings w-100'><img src="https://snipboard.io/ntODUr.jpg" alt='' /></div>
                    <div><Descrptab/></div>
                </Col>
                <Col lg={3}>
                    <div className='rentsec2'>
                        <div className='rentperday'><h4>&#8369;&nbsp;1,000 / per day</h4></div>
                        <div className='rentncont'>
                            <div className='pckdate'>
                                <Mitsubishidate />
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

export default Mitsubishilancer1
