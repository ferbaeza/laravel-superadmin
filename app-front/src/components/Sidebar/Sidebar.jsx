import './sidebar.scss';
import { useNavigate } from 'react-router';
import { useEffect, useState } from 'react';
// import { UserIcon } from '../../icons/usersIcon';
// import { Dashboard } from '../../icons/dashboard';
// import { SidebarIcon } from '../../icons/sidebarIcon';
import axiosClient from '../../shared/http/AxiosClient';



function Sidebar() {
  let navigate = useNavigate();
  const publicPath = process.env.PUBLIC_URL + '/icons/';
  const imageExtension = '.svg';

  const handleCardClick = (name) => {
    console.log('name', name);
    navigate("/" + name);
  }

  const [title, setTitle] = useState();
  const [menu, setMenu] = useState([]);

  async function fetchMenuData() {
    const response = await axiosClient.get("dashboard/menu", {});
    setTitle(response.data.message);
    setMenu(response.data.data);
  }

  useEffect(() => {
    fetchMenuData();
  }, []);

  console.log('menu', menu);
  console.log("title", title);

  return (
    <div className="sidebar">
        {menu.map((item) => (
          <div className="menu">
            <div className="menu-secciones">
              <div className="seccion-titulo" onClick={() => {
                  handleCardClick(`${item.url}`);
              }}>
                <span>
                  <img className='logo-sidebar' src={publicPath + item.icon + imageExtension} alt="image" />
                  {/* <SidebarIcon /> */}
                </span>
                <span className='span-list-titulo'>{item.nombre}</span>
            </div>
              <div className="menu-hijos">
                {item.subMenus?.data.map((child) => (
                  <div className="list-hijo" onClick={() => {
                    handleCardClick(`${child.url}`);
                  }}>
                    <span>
                      {/* <SidebarIcon /> */}
                    </span>
                    <span className="menu-hijos">
                      {child.nombre}
                    </span>
                  </div>
                ))}
              </div>
            </div>
          </div>
        ))}
        <div className="footer-sidebar-main">
          <div className="footer-sidebar">
            <span className="footer-firma">Dashboard</span>
            <span className="footer-firma">Fernando Baeza</span>
          </div>
        </div>
    </div>
  );
}

export default Sidebar;
