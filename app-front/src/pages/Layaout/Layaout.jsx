import './layaout.scss';
import '../../styles/index.scss';
import Login from '../Login/Login';
import Tablas from '../Tablas/Tablas';
import Usuarios from '../Usuarios/Usuarios';
import { Route, Routes } from "react-router";
import Sidebar from '../../components/Sidebar/Sidebar';
import RefreshPage from '../../components/Shared/Refresh';
import DashboardOutlet from '../Dashboard/DashboardOutlet';
import DashboardMainPage from '../Dashboard/DashboardMainPage';
import UsuariosAdmin from '../UsuariosAdmin/UsuariosAdmin';


function Layaout() {
  return (
    <div className="layaout">
      <div className="sidebar">
        <Sidebar />
      </div>
      <div className="content">
        <div className="layaout-main">
          <Routes>
            <Route path="/" element={<DashboardOutlet />}>
              <Route index element={<DashboardOutlet />} />

              <Route path="refresh" element={<RefreshPage />} />
              <Route path="main" element={<DashboardMainPage />} />
              <Route path="usuarios" element={<Usuarios />} />
              <Route path="admin-usuarios" element={<UsuariosAdmin />} />
              <Route path="tablas" element={<Tablas />} />
              <Route path="login" element={<Login />} />
            </Route>
          </Routes>
        </div>
      </div>
    </div>
  );
}

export default Layaout;
