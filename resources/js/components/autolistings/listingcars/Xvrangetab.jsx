import React from 'react'
import { Container, Row, Col} from 'react-bootstrap'
import 'react-datepicker/dist/react-datepicker.css';
import Xvrangedate from './Xvrangedate'
import Descrptab from './Descrptab'
import './descrptab.css'

const Xvrangetab = () => {
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
                    <div className='text-center mb-4'><h1 className='car2title'>XV Range Subaru</h1></div>
                    <div className='imglistings'><img src='https://autostar.templines.org/wp-content/uploads/2018/12/1487537941593e2393c6984322098766_0_0.jpg' alt='' /></div>
                    <div><Descrptab/></div>
                </Col>
                <Col lg={3}>
                    <div className='rentsec2'>
                        <div className='rentperday'><h4>&#8369;&nbsp;1,000 / per day</h4></div>
                        <div className='rentncont'>
                            <div className='pckdate'>
                                <Xvrangedate />
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

export default Xvrangetab
