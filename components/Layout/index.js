import React from "react";
import Link from "next/link";
import Head from 'next/head'
import 'bootstrap/dist/css/bootstrap.min.css'

function Index({children, title}) {
    return (
        <div className={'container'}>
            <div className="row">
                <Head><title>{title}</title></Head>
                <header>
                    <nav className="navbar navbar-expand-lg navbar-light bg-light">
                        <div className="container-fluid">
                            <a className="navbar-brand" href="#">Blog</a>
                            <button className="navbar-toggler" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                    aria-expanded="false" aria-label="Toggle navigation">
                                <span className="navbar-toggler-icon"/>
                            </button>

                            <div className="collapse navbar-collapse" id="navbarSupportedContent">

                                <ul className="navbar-nav me-auto mb-2 mb-lg-0">

                                    <li className="nav-item">
                                        <Link href={"/"}>
                                            <a className="nav-link"
                                               aria-current="page">Home</a>
                                        </Link>
                                    </li>

                                    <li className="nav-item">
                                        <Link href={"/about"}><a className="nav-link">About</a></Link>
                                    </li>

                                    <li className="nav-item">
                                        <Link href={"/hire-me"}><a className="nav-link ">Hire me</a></Link>
                                    </li>

                                    <li className="nav-item">
                                        <Link className="nav-link " href={"/blog"}><a
                                            className="nav-link ">Blogs</a></Link>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </header>
                {children}
                <footer>All right reserved -  &copy; {new Date().getFullYear()}</footer>
            </div>
        </div>
    )
}

export default Index;
