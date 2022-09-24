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



export default function Foresterdate() {
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
                value='Forester Subaru'
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
              <a data-bs-toggle="modal" data-bs-target="#staticBackdrop" className='dpickerbtn'>RENT&#160;NOW</a>

        
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Information</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

      <form action="">
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
            <br />
            <br />
<FormControl fullWidth>
            <InputLabel id="Car Brand" >Car Brand</InputLabel>
            <Select
                label="Car Brand"
                value='Forester Subaru'
                onChange={handleChange}
            >

                <MenuItem value='Forester Subaru'>Forester Subaru</MenuItem>
                {/* <MenuItem value='Mirage Range'>Mirage Range</MenuItem>
                <MenuItem value='Mitsubishi Lancer'>Mitsubishi Lancer</MenuItem>
                <MenuItem value='Pajero Range'>Pajero Range</MenuItem>
                <MenuItem value='Subaru Liberty'>Subaru Liberty</MenuItem>
                <MenuItem value='XV Range Subaru'>XV Range Subaru</MenuItem>  */}
                </Select>

            </FormControl> 

            

        <label>Date Pickup</label><br />
        <input type="text" />
        <br />
        <br />
        <label>Date Dropped Off</label><br />
        <input type="text" />
        <br />
        <br />
        <label>First Name</label><br />
        <input type="text" />
        <br />
        <br />
        <label>Last Name</label><br />
        <input type="text" />
        <br />
        <br />
        <label>Address</label><br />
        <input type="text" />
        
        <br />
        <br />
        <label>Email</label><br />
        <input type="text" />
        <br />
        <br />
        <label>Car Brand</label><br />
        <input type="text" />
        <br />
        <br />
        <label>License Number</label><br />
        <input type="text" />
        

      </form>

      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-primary">View Contract</button>
  
        <button type="button" class="btn btn-primary">Rent</button>
        
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>



            </div>
        
        </Stack>
        </LocalizationProvider>
  );
}
