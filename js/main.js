/**
 * Internee Profile Theme - Main JavaScript File
 *
 * @package Internee_Profile
 */

document.addEventListener( 'DOMContentLoaded', function() {
    'use strict';

    const prefersReduced = window.matchMedia( '(prefers-reduced-motion: reduce)' ).matches;
    const header = document.querySelector( '.site-header' );

    if ( header ) {
        const onScroll = function() {
            header.classList.toggle( 'is-scrolled', window.scrollY > 8 );
        };
        onScroll();
        window.addEventListener( 'scroll', onScroll );
    }

    const menuToggle = document.querySelector( '.menu-toggle' );
    const siteNav = document.querySelector( '.site-nav' );

    if ( menuToggle && siteNav ) {
        menuToggle.addEventListener( 'click', function() {
            const isOpen = siteNav.classList.toggle( 'is-open' );
            menuToggle.setAttribute( 'aria-expanded', isOpen ? 'true' : 'false' );
        } );
    }

    const smoothLinks = document.querySelectorAll( 'a[href^="#"]' );
    smoothLinks.forEach( function( link ) {
        link.addEventListener( 'click', function( event ) {
            const href = link.getAttribute( 'href' );

            if ( ! href || href === '#' || prefersReduced ) {
                return;
            }

            const target = document.querySelector( href );
            if ( ! target ) {
                return;
            }

            event.preventDefault();
            const headerHeight = header ? header.offsetHeight : 0;
            const targetPosition = target.getBoundingClientRect().top + window.scrollY - headerHeight - 12;

            window.scrollTo( {
                top: targetPosition,
                behavior: 'smooth'
            } );
        } );
    } );

    const revealItems = document.querySelectorAll( '[data-reveal]' );
    if ( revealItems.length === 0 ) {
        return;
    }

    if ( prefersReduced || ! ( 'IntersectionObserver' in window ) ) {
        revealItems.forEach( function( item ) {
            item.classList.add( 'is-visible' );
        } );
        return;
    }

    const observer = new IntersectionObserver( function( entries ) {
        entries.forEach( function( entry ) {
            if ( entry.isIntersecting ) {
                entry.target.classList.add( 'is-visible' );
                observer.unobserve( entry.target );
            }
        } );
    }, { threshold: 0.15 } );

    revealItems.forEach( function( item ) {
        const delay = item.getAttribute( 'data-delay' );
        if ( delay ) {
            item.style.transitionDelay = delay + 'ms';
        }
        observer.observe( item );
    } );
} );
