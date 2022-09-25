import * as React from 'react';
import dayjs from 'dayjs';
import Stack from '@mui/material/Stack';
import TextField from '@mui/material/TextField';
import { LocalizationProvider } from '@mui/x-date-pickers/LocalizationProvider';
import { AdapterDayjs } from '@mui/x-date-pickers/AdapterDayjs';
import { MobileDatePicker } from '@mui/x-date-pickers/MobileDatePicker';
import MenuItem from '@mui/material/MenuItem';
import FormControl from '@mui/material/FormControl';
import Select from '@mui/material/Select';
import Button from '@mui/material/Button';
import InputLabel from '@mui/material/InputLabel';
import './datepicker.css';



export default function Xvrangedate() {
  const [pickUp, pickUpValue] = React.useState(dayjs(Date()));
  const [dropOff, dropOffValue] = React.useState(dayjs(Date()));
  const [maker, setMaker] = React.useState('');

  const handleChangePickUp = (newValue) => {
    pickUpValue(newValue);
  };

  const handleChangeDropOff = (newValue) => {
    dropOffValue(newValue);
  };

  const handleChange = (event) => {
    setMaker(event.target.value);
  };

  return (
    

        <LocalizationProvider dateAdapter={AdapterDayjs}>
        <Stack
          spacing={3}>

            <MobileDatePicker
            minDate={new Date()}
            label="PICK-UP DATE"
            inputFormat="MM/DD/YYYY"
            value={pickUp}
            onChange={handleChangePickUp}
            renderInput={(params) => <TextField {...params} />}
            />

            <MobileDatePicker
            minDate={new Date()}
            label="DROP-OFF DATE"
            inputFormat="MM/DD/YYYY"
            value={dropOff}
            onChange={handleChangeDropOff}
            renderInput={(params) => <TextField {...params} />}
            />

            <FormControl fullWidth>
            <InputLabel id="Car Brand">Car Brand</InputLabel>
            <Select
                label="Car Brand"
                value='XV Range Subaru'
                onChange={handleChange}
            >

                <MenuItem value='Forester Subaru'>Forester Subaru</MenuItem>
                <MenuItem value='Mirage Range'>Mirage Range</MenuItem>
                <MenuItem value='Mitsubishi Lancer'>Mitsubishi Lancer</MenuItem>
                <MenuItem value='Pajero Range'>Pajero Range</MenuItem>
                <MenuItem value='Subaru Liberty'>Subaru Liberty</MenuItem>
                <MenuItem value='XV Range Subaru'>XV Range Subaru</MenuItem>
            </Select>
            </FormControl>

            <div>
              <a href='/contact' className='dpickerbtn'>RENT&#160;NOW</a>
            </div>
        
        </Stack>
        </LocalizationProvider>
  );
}
