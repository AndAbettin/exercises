import './App.css';
import weather from './weather.json';
import { useState, useEffect } from 'react';
import Day from './Day';

function App() {

  const [data, setData] = useState([])

  useEffect(() => {
    setData(weather);
  }, [])

  return (
    <div className="App">
      {
        data === null
          ? <p>loading...</p>
          : data.map(weather => <Day {...weather} />)
      }


    </div>
  );
}

export default App;
