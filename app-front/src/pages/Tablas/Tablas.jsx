import { useEffect, useState } from 'react';
import './tablas.scss';
import axiosClient from '../../shared/http/AxiosClient';

function Tablas() {

    const [tablas, setTablas] = useState();

    async function fetchData() {
      const response = await axiosClient.get(`listar-tablas`, {});
      const data = response.data;
      console.log("data", data);


      setTablas(data);
    }

    console.log("tablas", tablas);
    
    useEffect(() => {
      fetchData();
    }, []);

  return (
    <div className="main-tablas">
        Hello from Tablas 
    </div>
  );
}

export default Tablas;
