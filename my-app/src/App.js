import logo from './logo.svg';
import './App.css';
import DangerButton from './Button/DangerButton';
import SuccessButton from './Button/SuccessButton';
import Gallery from './User/Gallery';
import Button from '@mui/material/Button';
import BasicTable from './BasicTable';
import DataTable from './DataTable';

function App() {
  return (
    <div className="App">
      <header className="App-header">
        <img src={logo} className="App-logo" alt="logo" />
        <p>
          Edit <code>src/App.js</code> and save to reload.
        </p>
        <a
          className="App-link"
          href="https://reactjs.org"
          target="_blank"
          rel="noopener noreferrer"
        >
          Learn React
        </a>
        <DangerButton />
        <SuccessButton />
        <Gallery />
        <Button variant="contained">Hello World</Button>

        <BasicTable />

        <DataTable />
      </header>
    </div>
  );
}

export default App;
