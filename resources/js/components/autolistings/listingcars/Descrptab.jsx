import React from 'react';
import Tab from 'react-bootstrap/Tab';
import Tabs from 'react-bootstrap/Tabs';
import Vehicledesc from './Vehicledesc';
import Equipment from './Equipment';
import Specifications from './Specifications';
import Reviewslist from './Reviewslist'
import './descrptab.css';

function JustifiedExample() {
  return (
    <Tabs
      defaultActiveKey="vehicle description"
      id="justify-tab-example"
      className="mb-3"
      justify
    >
      <Tab eventKey="vehicle description" title="Vehicle Description">
        <Vehicledesc/>
      </Tab>
      <Tab eventKey="equipment" title="Equipment">
        <Equipment/>
      </Tab>
      <Tab eventKey="specifications" title="Specifications">
        <Specifications/>
      </Tab>
      <Tab eventKey="reviews" title="Reviews">
        <Reviewslist/>
      </Tab>
    </Tabs>
  );
}

export default JustifiedExample;