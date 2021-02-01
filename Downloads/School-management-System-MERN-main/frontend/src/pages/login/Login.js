import React, { useState } from 'react'
import { Link } from 'react-router-dom'
import {
  CButton,
  CCard,
  CCardBody,
  CCardGroup,
  CCol,
  CContainer,
  CForm,
  CInput,
  CInputGroup,
  CInputGroupPrepend,
  CInputGroupText,
  CRow
} from '@coreui/react'
import CIcon from '@coreui/icons-react'
import logo from '../../assets/icons/logo.png'
import axios from './../../store/axios'
import { useForm } from "react-hook-form";
import { useDispatch} from 'react-redux';
import {loggin}  from '../../store/slices/userSlice';
import {LoginString } from '../../store/localStorage'
import {  toast } from 'react-toastify';

const Login = ({history}) => {
  const [userId, setuserId] = useState("");
  const [password, setpassword] = useState("")
  const { register, handleSubmit, errors } = useForm();
  const dispatch = useDispatch();


  const handleSignin = () => {
      axios.post('/signin', {userID: userId, password}).then(res => {
        const {data} = res
         if(data.success === true){
            console.log(data.user)
            const user = data.user
            dispatch(loggin({
              id: user.userID,
              name: user.name,
              email: user.email,
              photoUrl: user.photoUrl,
              role: user.role
            }))
            localStorage.setItem(LoginString.ID, user.userID)
            localStorage.setItem(LoginString.PhotoURL, user.photoUrl)
            localStorage.setItem(LoginString.NAME, user.name) 
            localStorage.setItem(LoginString.EMAIL, user.email)
            localStorage.setItem(LoginString.USERROLE, user.role)
            history.push('/')
         }
         else{
           console.log(data)
           toast.error(data.error, {
            position: "top-center",
            autoClose: false,
            hideProgressBar: false,
            closeOnClick: true,
            pauseOnHover: true,
            draggable: true,
            progress: undefined,
           })  
        }
      }).catch(err => {
        console.log(err)
      })
  }

  return (
    <div className="c-app c-default-layout flex-row align-items-center">
      <CContainer>
        <CRow className="justify-content-center">
          <CCol md="8">
            <CCardGroup>
              <CCard className="p-4">
                <CCardBody>
                  <CForm  >
                    <h1>Login</h1>
                    <p className="text-muted">Sign In to your account</p>
                    <CInputGroup className="mb-3">
                      <CInputGroupPrepend>
                        <CInputGroupText>
                          <CIcon name="cil-user" />
                        </CInputGroupText>
                      </CInputGroupPrepend>
                      <input 
                       value={userId} 
                       name="userId"
                       ref={register({ required: true })} 
                       onChange={e => setuserId(e.target.value)} 
                       type="text" 
                       required
                       placeholder="ID" 
                       autoComplete="username" />
                       <br/>
                         {errors.userId && <span className=" form-error text-danger mb-2">This field is required</span>}
                    </CInputGroup>
                  
                    <CInputGroup className="mb-4">
                      <CInputGroupPrepend>
                        <CInputGroupText>
                          <CIcon name="cil-lock-locked" />
                        </CInputGroupText>
                      </CInputGroupPrepend>
                      <input 
                       type="password" 
                       placeholder="Password"
                       name="password"
                       ref={register({ required: true })} 
                       value={password}
                       required
                       onChange={e => setpassword(e.target.value)}
                       autoComplete="current-password" />
                       <br/>
                        {errors.password && <span className="form-error text-danger mb-2">This field is required</span>}
                    </CInputGroup>
                   
                    <CRow>
                      <CCol xs="6">
                        <CButton 
                        onClick={handleSubmit(handleSignin)} 
                        type="submit"
                         color="primary"
                          className="px-4">
                            Login
                        </CButton>
                      </CCol>
                      <CCol xs="6" className="text-right">
                        <CButton color="link" className="px-0">Forgot password?</CButton>
                      </CCol>
                    </CRow>
                  </CForm>
                </CCardBody>
              </CCard>
              <CCard className="text-white bg-primary py-5 d-md-down-none" style={{ width: '44%' }}>
                <CCardBody className="text-center">
                  <div>
                     <img src={logo} alt="logo"/>
                    <h2>Welcome Back</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                      labore et dolore magna aliqua.</p>
                  </div>
                </CCardBody>
              </CCard>
            </CCardGroup>
          </CCol>
        </CRow>
      </CContainer>
    </div>
  )
}

export default Login
