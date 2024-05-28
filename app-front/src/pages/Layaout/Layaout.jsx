import Sidebar from '../../components/Sidebar/Sidebar';
import '../../styles/index.scss';
import Dashboard from '../Dashboard/Dashboard';
import './layaout.scss';

function Layaout() {
  return (
    <div className="layaout">
      <div className="sidebar">
        <Sidebar />
      </div>
      <div className="content">
        <div className="layaout-main">
          <Dashboard />
        </div>
      </div>
    </div>
  );
}

export default Layaout;
