import React from 'react'
import { Container, Row, Col} from 'react-bootstrap'
import Descrptab from './Descrptab'
import Miragedate from './Miragedate'
import 'react-datepicker/dist/react-datepicker.css';
import './descrptab.css'

const Miragerangetab = () => {
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
                    <div className='text-center mb-5'><h1 className='car2title'>Mirage Range</h1></div>
                    <div className='imglistings'><img src='https://autostar.templines.org/wp-content/uploads/2018/12/2683357056f0ab41abef6173064588_0_0.jpg' alt='' /></div>
                    <div><Descrptab/></div>
                </Col>
                <Col lg={3}>
                    <div className='rentsec2'>
                        <div className='rentperday'><h4>&#8369;&nbsp;1,000 / per day</h4></div>
                        <div className='rentncont'>
                            <div className='pckdate'>
                                <Miragedate />
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

export default Miragerangetab
