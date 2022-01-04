
import React, { Component } from 'react';
import { useNavigate } from 'react-router-dom';

function Sidebar() {
    const navigate = useNavigate();

    return (
        <>
            <SidebarPrivate 
                navigate={navigate}
            />
        </>
    );
};

class SidebarPrivate extends Component {

    constructor( props ) {
        super( props );
        this.state = {};
    };

    componentDidMount() {
        this.get_data();
    };
    get_data() {};

    render() {
        return (
            <>
                <nav className="pcoded-navbar">
                    <div className="pcoded-inner-navbar main-menu">
                        <div className="pcoded-navigatio-lavel">Inicio</div>
                        <ul className="pcoded-item pcoded-left-item">
                            <li className="pcoded-hasmenu">
                                <a href="#" onClick={ (evt) => evt.preventDefault() }>
                                    <span className="pcoded-micon"><i className="feather icon-sidebar"></i></span>
                                    <span className="pcoded-mtext">Seguridad</span>
                                </a>
                                <ul className="pcoded-submenu">
                                    <li className="">
                                        <a href="menu-bottom.html"
                                            onClick={ ( evt ) => {
                                                evt.preventDefault();
                                                this.props.navigate( "/usuario/index" );
                                            } }
                                        >
                                            <span className="pcoded-mtext">Usuario</span>
                                        </a>
                                    </li>
                                    <li className="">
                                        <a href="menu-bottom.html"
                                            onClick={ ( evt ) => {
                                                evt.preventDefault();
                                                this.props.navigate( "/grupousuario/index" );
                                            } }
                                        >
                                            <span className="pcoded-mtext">Grupo Usuario</span>
                                        </a>
                                    </li>
                                    <li className="">
                                        <a href="menu-bottom.html"
                                            onClick={ ( evt ) => {
                                                evt.preventDefault();
                                                this.props.navigate( "/usuario/asignar" );
                                            } }
                                        >
                                            <span className="pcoded-mtext">Asignar Usuario</span>
                                        </a>
                                    </li>
                                    <li className="">
                                        <a href="menu-bottom.html"
                                            onClick={ ( evt ) => {
                                                evt.preventDefault();
                                                this.props.navigate( "/formulario/index" );
                                            } }
                                        >
                                            <span className="pcoded-mtext">Formulario</span>
                                        </a>
                                    </li>
                                    <li className="">
                                        <a href="menu-bottom.html"
                                            onClick={ ( evt ) => {
                                                evt.preventDefault();
                                                this.props.navigate( "/formulario/asignar" );
                                            } }
                                        >
                                            <span className="pcoded-mtext">Asignar Formulario</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </>
        );
    };
};

export default Sidebar;
