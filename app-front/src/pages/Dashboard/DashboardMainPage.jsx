import '../../styles/index.scss';
import './dashboard.scss';
import axiosClient from '../../shared/http/AxiosClient';
import UsersCharts from '../../components/Charts/UsersCharts';
import { useEffect, useState } from 'react';
import UsersList from '../../components/Charts/UsersList';

function  DashboardMainPage() {

  // const [usuarios, setUsuarios] = useState();
  // const [totalUsuarios, setTotalUsuarios] = useState();
  
  // const [tablas, setTablas] = useState();
  // const [totalTablas, setTotalTablas] = useState();
  
  // const [menu, setMenu] = useState();
  // const [totalMenu, setTotalMenu] = useState();

  // async function fetchUsersData() {
  //   const response = await axiosClient.get(`dashboard`, {});
  //   const data = response.data.data;
  //   // console.log('data', data);

  //   setUsuarios(data.usuarios.data);
  //   setTotalUsuarios(data.cantidadUsuarios);
    
  //   setTablas(data.tablas.data);
  //   setTotalTablas(data.cantidadTablas);

  //   setMenu(data.menu.data);
  //   setTotalMenu(data.cantidadMenu);
  // }

  // useEffect(() => {
  //   fetchUsersData();
  // }, []);



  return (
    <div className="dashboard-main">
      <div className="dashboard-boxes">
        <div className="box box1">
          <UsersCharts />
          {/* <UsersCharts usersData={usuarios} /> */}
        </div>
        <div className="box box2">
          <UsersList />

        </div>
        <div className="box box3">
          <UsersList />

        </div>
        <div className="box box4">box box4</div>
        <div className="box box5">box box5</div>
        <div className="box box6">box box6</div>
        <div className="box box7">box box7</div>
        <div className="box box8">box box8</div>
        <div className="box box9">box box9</div>
      </div>
    </div>
  );
}

export default DashboardMainPage;
