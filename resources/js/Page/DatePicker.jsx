import React from 'react';

import ReactDOM from 'react-dom/client';        
import { DayPicker, Row } from 'react-day-picker';

import { format } from 'date-fns';
import { differenceInCalendarDays } from 'date-fns';
import 'react-day-picker/dist/style.css';

function isPastDate(date) {
  return differenceInCalendarDays(date, new Date()) < 0;
}


export default function DatePicker() {
  const [selected, setSelected] = React.useState(new Date());

  return (
      <DayPicker
      fromDate={new Date()}
      // hidden={isPastDate}
      // showOutsideDays
        mode="single"
        selected={selected}
        onSelect={setSelected}
        weekStartsOn={1}
        styles={{
          month : {color : '#64676A', margin:'1em', paddingTop:'20px', fontSize : '20px'},
          caption: { color : 'black', marginBottom : '2em', fontSize : '0.8em'},
          head_cell : { color: 'black', textTransform : 'capitalize', fontSize : '20px', fontWeight : '600'},
          tbody : { fontWeight : '600'},
          cell : { padding : '5px'},
        }}
      />
  );
}

if(document.getElementById('date-picker')){
    ReactDOM.createRoot(document.getElementById('date-picker')).render(<DatePicker />);
};