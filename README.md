Shale
=====

[![Build Status](https://travis-ci.org/ShalePHP/HMVC.png?branch=master)](https://travis-ci.org/ShalePHP/HMVC)

HMVC modules for Silex


#HMVC

Many modern web frameworks are built using the Model View Controller (MVC) design pattern. The HMVC pattern takes this one step further by implement a Hierarchical Model View Controller.
HMVC is a collection of Model-View-Controller modules. Each module can operate indepdently from one another. However, one module can easily consume other MVC modules. This method encourages code reusibility and DRY (Don't-Repeat-Yourself) code. HMVC encourages small, testable, reusable components.

#Why Silex

Some popular HMVC implementations in the past include the Kohana Framework and the HMVC extension for Code Igniter. These implementations are built on top of "full stack" frameworks. The Shale HMVC implementation is built on top of the Silex microframework. This microframework gives developers more decisions about what tools he or she wants to integrate in his or her application. The Shale HMVC implementation provides a structural component for packaging modules as dependencies within the Silex DI Container. 

#Usage

To use Shale HMVC, one should be familiar with Silex and the Service Controller Service Provider. The Shale implementation works similarly. Routes should be handled using the Service
Module Service Provider. This allows you to package Models, Views and Controllers inside of the provided Module class. The Module acts as a proxy for user defined Controllers. The module requires that every controller returns an instance of the Symfony HttpFoundation component Response. This allows modules to stand alone, but also be easily consumed by one another. The module class simply enforces these contstraints. 

#Example

See the example included in the code example for more information
