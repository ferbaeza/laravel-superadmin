import './layaout.scss';
import '../../styles/index.scss';
import DashboardOutlet from '../Dashboard/DashboardOutlet';
import Sidebar from '../../components/Sidebar/Sidebar';
import { Route, Routes } from "react-router";
import Tablas from '../Tablas/Tablas';
import Login from '../Login/Login';
import RefreshPage from '../../components/Shared/Refresh';
import DashboardMainPage from '../Dashboard/DashboardMainPage';


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
              <Route path="login" element={<Login />} />
              <Route path="tablas" element={<Tablas />} />
            </Route>
          </Routes>
        </div>
      </div>
    </div>
  );
}

export default Layaout;
