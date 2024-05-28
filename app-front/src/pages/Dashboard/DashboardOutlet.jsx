import { Outlet } from 'react-router';
import '../../styles/index.scss';
import './dashboard.scss';

function  DashboardOutlet() {
  return (
    <div className="dashboard">
      <Outlet />
    </div>
  );
}

export default DashboardOutlet;
