import React from 'react';
import CardMedia from '@mui/material/CardMedia';
import Card from '@mui/material/Card';
import '../../../css/Banner.css';

export default function Banner() {
    return (
            <div>
                <Card sx={{ maxWidth: 5000, boxShadow: 0 }}>
                    <CardMedia component="img" alt="Ford" height="" image="https://snipboard.io/Ih3WL2.jpg" />
                </Card>
                <div id='indexaboutus'></div>
            </div>
        
    )
};