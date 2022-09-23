import React from 'react'
import Container from 'react-bootstrap/Container';
import Row from 'react-bootstrap/Row';
import Col from 'react-bootstrap/Col';
import '../../../css/revrev.css'

const Revrev = () => {
  return (
    <div>
        <Container className='revcont'>
            <Row className='justify-content-md-center'>
                <Col lg={4} className='revc1'>
                    <img src='https://www-static-blogs.operacdn.com/mobile/wp-content/uploads/sites/4/2015/02/istock-image-.jpg' alt='' />
                </Col>
                <Col lg={5} className='revc2'>
                    <div>
                        <i class='fas fa-quote-right quoterev'></i>
                        <div className='rev2div'>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Voluptatem iste harum modi quibusdam natus nisi quas nostrum!
                            Vero, odio maxime!</p>
                        </div>
                        <div className='revcust'>
                            <p><span>Christine Kerry</span> <br/>RentCar Customer</p>
                        </div>
                    </div>
                </Col>
            </Row>
        </Container>
    </div>
  )
}

export default Revrev
