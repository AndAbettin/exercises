import './App.css';
import Box from './Box';
import { useState } from 'react';


function App() {

  const [topMargin, setTopMargin] = useState(0);

  const lowerBox = () => {
    setTopMargin(topMargin + 10);
  }

  return (
    <div className="App">
      <div className="button">
        <button onClick={lowerBox}>Move the box!</button>
      </div>


      <Box topMargin={topMargin} />


    </div>
  );
}

export default App;
