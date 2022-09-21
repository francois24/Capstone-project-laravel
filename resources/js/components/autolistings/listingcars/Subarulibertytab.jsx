import React from 'react'
import { Container, Row, Col} from 'react-bootstrap'
import 'react-datepicker/dist/react-datepicker.css';
import Descrptab from './Descrptab'
import Libertydate from './Libertydate'
import './descrptab.css'

const Subarulibertytab = () => {
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
                    <div className='text-center mb-4'><h1 className='car2title'>Subaru Liberty</h1></div>
                    <div className='imglistings'><img src='https://autostar.templines.org/wp-content/uploads/2018/12/18054365085a8e60bba5141338689408_0_0.jpg' alt='' /></div>
                    <div><Descrptab/></div>
                </Col>
                <Col lg={3}>
                    <div className='rentsec2'>
                        <div className='rentperday'><h4>&#8369;&nbsp;1,000 / per day</h4></div>
                        <div className='rentncont'>
                            <div className='pckdate'>
                                <Libertydate />
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

export default Subarulibertytab
