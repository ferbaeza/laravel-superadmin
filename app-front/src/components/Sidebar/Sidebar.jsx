import { Dashboard } from '../../icons/dashboard';
import { SidebarIcon } from '../../icons/sidebarIcon';
import { UserIcon } from '../../icons/usersIcon';
import './sidebar.scss';


function Sidebar() {
  return (
    <div className="sidebar">
      <div className="menu-header">
        <SidebarIcon />
        <p>Dashboard</p>
      </div>
      <div className="menu-list">
        <div className="menu-list-titulo">
          <span className="span-list-titulo">Menu</span>
        </div>
        <div className="menu-list-hijos">
          <div className="list-hijo">
            <span>
              <Dashboard />
            </span>
            <span>Tablas</span>
          </div>
          <div className="list-hijo">
            <span>
              <SidebarIcon />
            </span>
            <span>Dashboard</span>
          </div>
          <div className="list-hijo">
            <span>
              <UserIcon />
            </span>

            <span>Users</span>
          </div>
        </div>
      </div>
      <div className="menu-settings">
        <div className="menu-settings-titulo">
          <span className="span-list-titulo">Settings</span>
        </div>
        <div className="menu-settings-hijos">
          <div className="list-hijo">
            <span>
              <UserIcon />
            </span>
            <span>Profile</span>
          </div>
          <div className="list-hijo">
            <span>
              <UserIcon />
            </span>
            <span>Settings</span>
          </div>
          <div className="list-hijo">
            <span>
              <UserIcon />
            </span>
            <span>Logout</span>
          </div>
        </div>
      </div>
      <div className="menu-footer">
        <div className="footer-class">
          <span className="footer-firma">Dashboard</span>
          <span className="footer-firma">Fernando Baeza</span>
        </div>
      </div>
    </div>
  );
}

export default Sidebar;
