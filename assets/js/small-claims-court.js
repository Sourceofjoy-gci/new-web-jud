/**
 * Small Claims Court Page JavaScript
 * Interactive features and animations for the Small Claims Court page
 */

document.addEventListener('DOMContentLoaded', function() {
    // Initialize all components
    initEligibilityCalculator();
    initClaimValueCalculator();
    initCaseExamples();
    initCourtPreparationTabs();
    initProcessToggles();
    initCommonQuestions();
    initCourtLocationsMap();
    initFaqAccordion();
    initDocumentChecklistTool();
    initFormHandling();
    initAnimations();
});

/**
 * Eligibility Calculator
 */
function initEligibilityCalculator() {
    const calculator = document.querySelector('.calculator-container');
    if (!calculator) return;

    const progress = document.getElementById('calculatorProgress');
    const stepIndicators = document.querySelectorAll('.step-indicator');
    const calculatorSteps = document.querySelectorAll('.calculator-step');
    
    // Step navigation buttons
    const step1Next = document.getElementById('step1Next');
    const step2Prev = document.getElementById('step2Prev');
    const step2Next = document.getElementById('step2Next');
    const step3Prev = document.getElementById('step3Prev');
    const step3Next = document.getElementById('step3Next');
    const step4Prev = document.getElementById('step4Prev');
    const checkEligibility = document.getElementById('checkEligibility');
    const resetCalculator = document.getElementById('resetCalculator');
    const proceedButton = document.getElementById('proceedButton');
    
    // Form inputs
    const claimAmount = document.getElementById('claimAmount');
    const claimTypeInputs = document.querySelectorAll('input[name="claimType"]');
    const timePeriodInputs = document.querySelectorAll('input[name="timePeriod"]');
    const locationSelect = document.getElementById('location');
    
    let currentStep = 0;
    const totalSteps = 4;
    
    // Set initial state
    updateStepState();
    
    // Step 1 Next button
    if (step1Next) {
        step1Next.addEventListener('click', function() {
            if (!validateStep1()) return;
            
            goToStep(1);
        });
    }
    
    // Step 2 Previous button
    if (step2Prev) {
        step2Prev.addEventListener('click', function() {
            goToStep(0);
        });
    }
    
    // Step 2 Next button
    if (step2Next) {
        step2Next.addEventListener('click', function() {
            if (!validateStep2()) return;
            
            goToStep(2);
        });
    }
    
    // Step 3 Previous button
    if (step3Prev) {
        step3Prev.addEventListener('click', function() {
            goToStep(1);
        });
    }
    
    // Step 3 Next button
    if (step3Next) {
        step3Next.addEventListener('click', function() {
            if (!validateStep3()) return;
            
            goToStep(3);
        });
    }
    
    // Step 4 Previous button
    if (step4Prev) {
        step4Prev.addEventListener('click', function() {
            goToStep(2);
        });
    }
    
    // Check Eligibility button
    if (checkEligibility) {
        checkEligibility.addEventListener('click', function() {
            if (!validateStep4()) return;
            
            // Calculate eligibility
            const eligibilityResults = document.getElementById('eligibilityResults');
            const amount = parseFloat(claimAmount.value);
            const claimType = getSelectedRadioValue(claimTypeInputs);
            const timePeriod = getSelectedRadioValue(timePeriodInputs);
            const location = locationSelect.value;
            
            // Determine eligibility
            let isEligible = true;
            let reasons = [];
            
            if (amount > 10000) {
                isEligible = false;
                reasons.push('Claim amount exceeds the E10,000 limit for Small Claims Court.');
            }
            
            if (timePeriod === 'more_than_3_years') {
                isEligible = false;
                reasons.push('Claims must be filed within 3 years of the dispute.');
            }
            
            if (location === 'outside') {
                isEligible = false;
                reasons.push('Either you or the respondent must reside within Eswatini.');
            }
            
            // Excluded claim types
            const excludedTypes = ['criminal', 'family', 'employment'];
            if (excludedTypes.includes(claimType)) {
                isEligible = false;
                reasons.push(`${claimType.charAt(0).toUpperCase() + claimType.slice(1)} cases are not handled by the Small Claims Court.`);
            }
            
            // Show results
            displayEligibilityResults(eligibilityResults, isEligible, reasons, amount, claimType, location);
            
            // Show or hide proceed button
            proceedButton.style.display = isEligible ? 'inline-flex' : 'none';
            
            // Go to results step
            goToStep(4);
        });
    }
    
    // Reset button
    if (resetCalculator) {
        resetCalculator.addEventListener('click', function() {
            resetForm();
            goToStep(0);
        });
    }
    
    // Step indicators click
    stepIndicators.forEach((indicator, index) => {
        indicator.addEventListener('click', function() {
            // Only allow going to completed steps or the current step + 1
            if (index <= currentStep + 1 && index < totalSteps) {
                goToStep(index);
            }
        });
    });
    
    function goToStep(stepIndex) {
        // Hide all steps
        calculatorSteps.forEach(step => step.classList.remove('active'));
        
        // Show selected step
        calculatorSteps[stepIndex].classList.add('active');
        
        // Update progress
        const progressPercent = ((stepIndex + 1) / (totalSteps + 1)) * 100;
        progress.style.width = `${progressPercent}%`;
        
        // Update step indicators
        stepIndicators.forEach((indicator, index) => {
            indicator.classList.remove('active', 'completed');
            
            if (index === stepIndex) {
                indicator.classList.add('active');
            } else if (index < stepIndex) {
                indicator.classList.add('completed');
            }
        });
        
        // Update current step
        currentStep = stepIndex;
    }
    
    function updateStepState() {
        // Show first step
        calculatorSteps.forEach((step, index) => {
            step.classList.toggle('active', index === currentStep);
        });
        
        // Set initial progress
        progress.style.width = `${((currentStep + 1) / (totalSteps + 1)) * 100}%`;
        
        // Set initial indicator
        stepIndicators[0].classList.add('active');
    }
    
    function validateStep1() {
        if (!claimAmount.value || isNaN(parseFloat(claimAmount.value)) || parseFloat(claimAmount.value) <= 0) {
            alert('Please enter a valid claim amount.');
            return false;
        }
        return true;
    }
    
    function validateStep2() {
        if (!getSelectedRadioValue(claimTypeInputs)) {
            alert('Please select a claim type.');
            return false;
        }
        return true;
    }
    
    function validateStep3() {
        if (!getSelectedRadioValue(timePeriodInputs)) {
            alert('Please select when the dispute occurred.');
            return false;
        }
        return true;
    }
    
    function validateStep4() {
        if (!locationSelect.value) {
            alert('Please select a region.');
            return false;
        }
        return true;
    }
    
    function getSelectedRadioValue(radioInputs) {
        for (const input of radioInputs) {
            if (input.checked) {
                return input.value;
            }
        }
        return null;
    }
    
    function resetForm() {
        claimAmount.value = '';
        
        claimTypeInputs.forEach(input => {
            input.checked = false;
        });
        
        timePeriodInputs.forEach(input => {
            input.checked = false;
        });
        
        locationSelect.selectedIndex = 0;
    }
    
    function displayEligibilityResults(container, isEligible, reasons, amount, claimType, location) {
        let html = '';
        
        if (isEligible) {
            html = `
                <div class="eligibility-result eligible">
                    <div class="result-icon">
                        <i class="fas fa-check-circle"></i>
                    </div>
                    <div class="result-message">Your claim is eligible for Small Claims Court</div>
                    <div class="result-details">
                        <p>Based on the information provided, your claim meets the criteria for the Small Claims Court in Eswatini. You can proceed with filing your claim by following our simple step-by-step process.</p>
                    </div>
                </div>
                <div class="next-steps">
                    <h3>Next Steps</h3>
                    <p>1. Download and complete the Small Claims Court Form</p>
                    <p>2. Gather all relevant supporting documents</p>
                    <p>3. Pay the filing fee of E${amount <= 1000 ? '50' : amount <= 5000 ? '100' : '200'}</p>
                    <p>4. File your claim at the Small Claims Court in the ${getRegionName(location)} region</p>
                </div>
            `;
        } else {
            html = `
                <div class="eligibility-result ineligible">
                    <div class="result-icon">
                        <i class="fas fa-times-circle"></i>
                    </div>
                    <div class="result-message">Your claim is not eligible for Small Claims Court</div>
                    <div class="result-details">
                        <p>Based on the information provided, your claim does not meet the criteria for the Small Claims Court in Eswatini for the following reasons:</p>
                        <ul>
                            ${reasons.map(reason => `<li>${reason}</li>`).join('')}
                        </ul>
                    </div>
                </div>
                <div class="alternative-options">
                    <h4>Alternative Options</h4>
                    <p>You may consider the following alternatives:</p>
                    <ul>
                        ${getAlternativeOptions(amount, claimType, reasons)}
                    </ul>
                </div>
            `;
        }
        
        container.innerHTML = html;
    }
    
    function getRegionName(regionCode) {
        const regions = {
            'hhohho': 'Hhohho',
            'manzini': 'Manzini',
            'lubombo': 'Lubombo',
            'shiselweni': 'Shiselweni'
        };
        
        return regions[regionCode] || regionCode;
    }
    
    function getAlternativeOptions(amount, claimType, reasons) {
        let options = [];
        
        if (reasons.some(r => r.includes('E10,000 limit'))) {
            options.push('<li>File your claim with the Magistrate Court, which handles civil claims up to E100,000.</li>');
        }
        
        if (reasons.some(r => r.includes('3 years'))) {
            options.push('<li>Consult with a lawyer to explore possible exceptions to the statute of limitations.</li>');
        }
        
        if (reasons.some(r => r.includes('reside within Eswatini'))) {
            options.push('<li>Consider filing in the jurisdiction where the dispute occurred or where the respondent resides.</li>');
        }
        
        if (claimType === 'criminal') {
            options.push('<li>Report the matter to the Police Service for criminal proceedings.</li>');
        }
        
        if (claimType === 'family') {
            options.push('<li>File your case with the Family Court division of the High Court.</li>');
        }
        
        if (claimType === 'employment') {
            options.push('<li>Submit your complaint to the Industrial Court, which specializes in employment disputes.</li>');
        }
        
        // Add general option
        options.push('<li>Seek legal advice from a qualified attorney for guidance specific to your situation.</li>');
        
        return options.join('');
    }
}

/**
 * Claim Value Calculator
 */
function initClaimValueCalculator() {
    const calculatorForm = document.getElementById('claimCalculatorForm');
    if (!calculatorForm) return;
    
    const principalAmount = document.getElementById('principalAmount');
    const includeInterest = document.getElementById('includeInterest');
    const interestFields = document.querySelector('.interest-fields');
    const interestRate = document.getElementById('interestRate');
    const interestPeriod = document.getElementById('interestPeriod');
    const damageCosts = document.getElementById('damageCosts');
    const transportCosts = document.getElementById('transportCosts');
    const otherCosts = document.getElementById('otherCosts');
    
    const calculateBtn = document.getElementById('calculateClaimBtn');
    const resetBtn = document.getElementById('resetCalcBtn');
    const calculationResults = document.getElementById('calculationResults');
    
    // Results elements
    const resultPrincipal = document.getElementById('resultPrincipal');
    const resultInterest = document.getElementById('resultInterest');
    const interestResult = document.querySelector('.interest-result');
    const resultCosts = document.getElementById('resultCosts');
    const resultTotal = document.getElementById('resultTotal');
    const resultFee = document.getElementById('resultFee');
    const eligibilityMessage = document.getElementById('eligibilityMessage');
    const eligibilityIndicator = document.querySelector('.eligibility-indicator');
    
    // Toggle interest fields
    if (includeInterest) {
        includeInterest.addEventListener('change', function() {
            interestFields.style.display = this.checked ? 'block' : 'none';
        });
    }
    
    // Calculate button
    if (calculateBtn) {
        calculateBtn.addEventListener('click', function() {
            if (!validateCalculatorForm()) return;
            
            // Get input values
            const principal = parseFloat(principalAmount.value) || 0;
            const damages = parseFloat(damageCosts.value) || 0;
            const transport = parseFloat(transportCosts.value) || 0;
            const other = parseFloat(otherCosts.value) || 0;
            
            // Calculate interest if included
            let interestAmount = 0;
            if (includeInterest.checked) {
                const rate = parseFloat(interestRate.value) || 0;
                const period = parseFloat(interestPeriod.value) || 0;
                interestAmount = (principal * rate * period) / (100 * 12);
            }
            
            // Calculate additional costs
            const additionalCosts = damages + transport + other;
            
            // Calculate total
            const total = principal + interestAmount + additionalCosts;
            
            // Determine filing fee
            let filingFee = 0;
            if (total <= 1000) {
                filingFee = 50;
            } else if (total <= 5000) {
                filingFee = 100;
            } else {
                filingFee = 200;
            }
            
            // Check eligibility
            const isEligible = total <= 10000;
            
            // Update results
            resultPrincipal.textContent = `E${principal.toFixed(2)}`;
            
            if (includeInterest.checked && interestAmount > 0) {
                interestResult.style.display = 'table-row';
                resultInterest.textContent = `E${interestAmount.toFixed(2)}`;
            } else {
                interestResult.style.display = 'none';
            }
            
            resultCosts.textContent = `E${additionalCosts.toFixed(2)}`;
            resultTotal.textContent = `E${total.toFixed(2)}`;
            resultFee.textContent = `E${filingFee.toFixed(2)}`;
            
            // Update eligibility message
            if (isEligible) {
                eligibilityMessage.textContent = 'Your claim is eligible for Small Claims Court.';
                eligibilityIndicator.querySelector('.indicator-icon i').className = 'fas fa-check-circle';
                eligibilityIndicator.querySelector('.indicator-icon').classList.remove('ineligible');
            } else {
                eligibilityMessage.textContent = 'Your claim exceeds the E10,000 limit for Small Claims Court. Consider filing with the Magistrate Court instead.';
                eligibilityIndicator.querySelector('.indicator-icon i').className = 'fas fa-exclamation-circle';
                eligibilityIndicator.querySelector('.indicator-icon').classList.add('ineligible');
            }
            
            // Show results
            calculationResults.style.display = 'block';
        });
    }
    
    // Reset button
    if (resetBtn) {
        resetBtn.addEventListener('click', function() {
            calculatorForm.reset();
            interestFields.style.display = 'none';
            calculationResults.style.display = 'none';
        });
    }
    
    function validateCalculatorForm() {
        if (!principalAmount.value || isNaN(parseFloat(principalAmount.value)) || parseFloat(principalAmount.value) <= 0) {
            alert('Please enter a valid principal amount.');
            principalAmount.focus();
            return false;
        }
        
        if (includeInterest.checked) {
            if (!interestRate.value || isNaN(parseFloat(interestRate.value)) || parseFloat(interestRate.value) < 0) {
                alert('Please enter a valid interest rate.');
                interestRate.focus();
                return false;
            }
            
            if (!interestPeriod.value || isNaN(parseFloat(interestPeriod.value)) || parseFloat(interestPeriod.value) <= 0) {
                alert('Please enter a valid interest period.');
                interestPeriod.focus();
                return false;
            }
        }
        
        return true;
    }
}

/**
 * Case Type Examples
 */
function initCaseExamples() {
    const exampleToggles = document.querySelectorAll('.example-toggle');
    
    exampleToggles.forEach(toggle => {
        toggle.addEventListener('click', function() {
            // Toggle active class
            this.classList.toggle('active');
            
            // Get parent and content
            const container = this.closest('.example-container');
            const content = container.querySelector('.example-content');
            
            // Toggle icon
            const icon = this.querySelector('i');
            icon.className = this.classList.contains('active') ? 'fas fa-chevron-up' : 'fas fa-chevron-down';
            
            // Toggle content height
            if (this.classList.contains('active')) {
                content.style.maxHeight = content.scrollHeight + 'px';
            } else {
                content.style.maxHeight = '0';
            }
        });
    });
}

/**
 * Court Preparation Tabs
 */
function initCourtPreparationTabs() {
    const tabs = document.querySelectorAll('.preparation-tabs .tab');
    
    tabs.forEach(tab => {
        tab.addEventListener('click', function() {
            // Remove active class from all tabs
            tabs.forEach(t => t.classList.remove('active'));
            
            // Add active class to clicked tab
            this.classList.add('active');
            
            // Get target content ID
            const targetId = this.getAttribute('data-tab');
            
            // Hide all tab contents
            document.querySelectorAll('.tab-content').forEach(content => {
                content.classList.remove('active');
            });
            
            // Show target content
            document.getElementById(targetId).classList.add('active');
        });
    });
}

/**
 * Process Information Toggles
 */
function initProcessToggles() {
    const toggleButtons = document.querySelectorAll('.btn-toggle-info');
    
    toggleButtons.forEach(button => {
        button.addEventListener('click', function() {
            const targetId = this.getAttribute('data-target');
            const targetElement = document.getElementById(targetId);
            
            if (targetElement) {
                const isVisible = targetElement.style.display === 'block';
                targetElement.style.display = isVisible ? 'none' : 'block';
            }
        });
    });
}

/**
 * Common Questions Accordions
 */
function initCommonQuestions() {
    const questionItems = document.querySelectorAll('.question-item');
    
    questionItems.forEach(item => {
        const toggle = item.querySelector('.question-toggle');
        const answer = item.querySelector('.question-answer');
        
        toggle.addEventListener('click', function() {
            // Toggle active class
            item.classList.toggle('active');
            
            // Toggle answer height
            if (item.classList.contains('active')) {
                answer.style.maxHeight = answer.scrollHeight + 'px';
            } else {
                answer.style.maxHeight = '0';
            }
        });
    });
}

/**
 * Court Locations Map
 */
function initCourtLocationsMap() {
    const mapContainer = document.getElementById('smallClaimsMap');
    if (!mapContainer) return;
    
    // Mock court locations data
    const courtLocations = [
        {
            name: 'Mbabane Small Claims Court',
            region: 'hhohho',
            address: 'Judicial Building, Mbabane',
            phone: '+268 2404 3000',
            hours: 'Mon-Fri: 8:00 AM - 4:30 PM',
            coordinates: [-26.3054, 31.1367]
        },
        {
            name: 'Manzini Small Claims Court',
            region: 'manzini',
            address: 'Magistrate Court Building, Manzini',
            phone: '+268 2505 2000',
            hours: 'Mon-Fri: 8:00 AM - 4:30 PM',
            coordinates: [-26.4957, 31.3800]
        },
        {
            name: 'Siteki Small Claims Court',
            region: 'lubombo',
            address: 'Magistrate Court Building, Siteki',
            phone: '+268 2343 1000',
            hours: 'Mon-Fri: 8:00 AM - 4:30 PM',
            coordinates: [-26.4557, 31.9500]
        },
        {
            name: 'Nhlangano Small Claims Court',
            region: 'shiselweni',
            address: 'Magistrate Court Building, Nhlangano',
            phone: '+268 2207 1000',
            hours: 'Mon-Fri: 8:00 AM - 4:30 PM',
            coordinates: [-27.1167, 31.2000]
        }
    ];
    
    // In a real implementation, you'd use a proper map API (Google Maps, Leaflet, etc.)
    // Here, we'll create a simple mockup for demonstration purposes
    
    // Remove loading indicator
    const loadingIndicator = mapContainer.querySelector('.map-loading');
    if (loadingIndicator) {
        loadingIndicator.style.display = 'none';
    }
    
    // Create a simple map representation
    const mapElement = document.createElement('div');
    mapElement.className = 'mock-map';
    mapElement.style.width = '100%';
    mapElement.style.height = '100%';
    mapElement.style.position = 'relative';
    mapElement.style.backgroundColor = '#345d8a';
    mapElement.style.borderRadius = '8px';
    mapElement.style.overflow = 'hidden';
    
    // Add a watermark
    const watermark = document.createElement('div');
    watermark.textContent = 'Eswatini Map';
    watermark.style.position = 'absolute';
    watermark.style.bottom = '20px';
    watermark.style.right = '20px';
    watermark.style.color = 'rgba(255, 255, 255, 0.2)';
    watermark.style.fontSize = '2rem';
    watermark.style.fontWeight = 'bold';
    
    mapElement.appendChild(watermark);
    
    // Add markers for each location
    courtLocations.forEach(location => {
        // Convert coordinates to pixel positions (this is simplified)
        // In reality, you'd use proper map projection
        const x = ((location.coordinates[1] - 30.5) / 2) * 100; // longitude
        const y = ((location.coordinates[0] + 28) / 2) * 100; // latitude
        
        const marker = document.createElement('div');
        marker.className = 'map-marker';
        marker.setAttribute('data-location', location.name);
        marker.innerHTML = '<i class="fas fa-map-marker-alt"></i>';
        marker.style.position = 'absolute';
        marker.style.left = `${x}%`;
        marker.style.top = `${y}%`;
        marker.style.color = '#e58e26';
        marker.style.fontSize = '1.5rem';
        marker.style.transform = 'translate(-50%, -100%)';
        marker.style.cursor = 'pointer';
        marker.style.zIndex = '10';
        marker.style.transition = 'all 0.3s ease';
        
        // Hover effect
        marker.addEventListener('mouseenter', () => {
            marker.style.transform = 'translate(-50%, -100%) scale(1.2)';
        });
        
        marker.addEventListener('mouseleave', () => {
            marker.style.transform = 'translate(-50%, -100%) scale(1)';
        });
        
        // Click event
        marker.addEventListener('click', () => {
            showLocationInfo(location);
        });
        
        mapElement.appendChild(marker);
    });
    
    // Append map to container
    mapContainer.appendChild(mapElement);
    
    // Populate location list
    const locationsList = document.getElementById('courtLocationsList');
    if (locationsList) {
        courtLocations.forEach(location => {
            const locationCard = document.createElement('div');
            locationCard.className = 'location-card';
            locationCard.innerHTML = `
                <h3>${location.name}</h3>
                <div class="location-details">
                    <p><i class="fas fa-map-marker-alt"></i> ${location.address}</p>
                    <p><i class="fas fa-phone-alt"></i> ${location.phone}</p>
                    <p><i class="fas fa-clock"></i> ${location.hours}</p>
                </div>
                <button class="location-btn" data-location="${location.name}">View on Map</button>
            `;
            
            // Style the card
            locationCard.style.background = 'rgba(255, 255, 255, 0.05)';
            locationCard.style.borderRadius = '8px';
            locationCard.style.padding = '1rem';
            locationCard.style.marginBottom = '1rem';
            
            locationCard.querySelector('h3').style.fontSize = '1.125rem';
            locationCard.querySelector('h3').style.color = '#fff';
            locationCard.querySelector('h3').style.marginBottom = '0.75rem';
            
            locationCard.querySelectorAll('.location-details p').forEach(p => {
                p.style.fontSize = '0.875rem';
                p.style.color = '#b0b8c5';
                p.style.marginBottom = '0.5rem';
            });
            
            locationCard.querySelectorAll('.location-details i').forEach(i => {
                i.style.width = '20px';
                i.style.marginRight = '0.5rem';
                i.style.color = '#e58e26';
            });
            
            const viewButton = locationCard.querySelector('.location-btn');
            viewButton.style.display = 'block';
            viewButton.style.width = '100%';
            viewButton.style.padding = '0.5rem';
            viewButton.style.marginTop = '0.75rem';
            viewButton.style.background = 'rgba(255, 255, 255, 0.1)';
            viewButton.style.border = 'none';
            viewButton.style.borderRadius = '4px';
            viewButton.style.color = '#fff';
            viewButton.style.cursor = 'pointer';
            viewButton.style.transition = 'all 0.3s ease';
            
            viewButton.addEventListener('mouseenter', () => {
                viewButton.style.background = '#e58e26';
            });
            
            viewButton.addEventListener('mouseleave', () => {
                viewButton.style.background = 'rgba(255, 255, 255, 0.1)';
            });
            
            // View on map button
            viewButton.addEventListener('click', () => {
                // Highlight the marker
                const marker = mapElement.querySelector(`.map-marker[data-location="${location.name}"]`);
                if (marker) {
                    // Reset all markers
                    mapElement.querySelectorAll('.map-marker').forEach(m => {
                        m.style.color = '#e58e26';
                        m.style.transform = 'translate(-50%, -100%) scale(1)';
                    });
                    
                    // Highlight selected marker
                    marker.style.color = '#fff';
                    marker.style.transform = 'translate(-50%, -100%) scale(1.5)';
                    
                    // Show location info
                    showLocationInfo(location);
                }
            });
            
            locationsList.appendChild(locationCard);
        });
    }
    
    // Search functionality
    const searchInput = document.getElementById('locationSearchInput');
    const searchButton = document.getElementById('searchLocationBtn');
    
    if (searchInput && searchButton) {
        searchButton.addEventListener('click', () => {
            const searchTerm = searchInput.value.toLowerCase();
            
            // Filter location cards
            document.querySelectorAll('.location-card').forEach(card => {
                const locationName = card.querySelector('h3').textContent.toLowerCase();
                const locationDetails = card.querySelector('.location-details').textContent.toLowerCase();
                
                if (locationName.includes(searchTerm) || locationDetails.includes(searchTerm)) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            });
        });
        
        // Reset search when input is cleared
        searchInput.addEventListener('input', () => {
            if (searchInput.value === '') {
                document.querySelectorAll('.location-card').forEach(card => {
                    card.style.display = 'block';
                });
            }
        });
    }
    
    // Find nearest court button
    const findNearestBtn = document.getElementById('findNearestBtn');
    
    if (findNearestBtn) {
        findNearestBtn.addEventListener('click', () => {
            // In a real implementation, you'd use the browser's geolocation API
            // For demo purposes, we'll just show a random court
            const randomIndex = Math.floor(Math.random() * courtLocations.length);
            const randomLocation = courtLocations[randomIndex];
            
            // Reset all markers
            mapElement.querySelectorAll('.map-marker').forEach(m => {
                m.style.color = '#e58e26';
                m.style.transform = 'translate(-50%, -100%) scale(1)';
            });
            
            // Highlight random marker
            const marker = mapElement.querySelector(`.map-marker[data-location="${randomLocation.name}"]`);
            if (marker) {
                marker.style.color = '#fff';
                marker.style.transform = 'translate(-50%, -100%) scale(1.5)';
                
                // Show location info
                showLocationInfo(randomLocation);
                
                // Scroll to the corresponding location card
                const locationCards = document.querySelectorAll('.location-card');
                locationCards.forEach((card, index) => {
                    const cardLocationName = card.querySelector('h3').textContent;
                    if (cardLocationName === randomLocation.name) {
                        card.scrollIntoView({ behavior: 'smooth' });
                    }
                });
            }
        });
    }
    
    function showLocationInfo(location) {
        // In a real implementation, you might show an info window on the map
        // For demo purposes, we'll just log to console
        console.log('Location selected:', location);
        
        // Create a tooltip (simple implementation)
        let tooltip = mapElement.querySelector('.map-tooltip');
        
        if (!tooltip) {
            tooltip = document.createElement('div');
            tooltip.className = 'map-tooltip';
            mapElement.appendChild(tooltip);
        }
        
        // Position tooltip near the marker
        const marker = mapElement.querySelector(`.map-marker[data-location="${location.name}"]`);
        if (marker) {
            const markerRect = marker.getBoundingClientRect();
            const mapRect = mapElement.getBoundingClientRect();
            
            const left = marker.offsetLeft;
            const top = marker.offsetTop - 5;
            
            tooltip.style.position = 'absolute';
            tooltip.style.left = `${left}px`;
            tooltip.style.top = `${top}px`;
            tooltip.style.transform = 'translate(-50%, -100%)';
            tooltip.style.background = '#fff';
            tooltip.style.color = '#1a1a1a';
            tooltip.style.padding = '1rem';
            tooltip.style.borderRadius = '8px';
            tooltip.style.boxShadow = '0 5px 15px rgba(0, 0, 0, 0.2)';
            tooltip.style.zIndex = '20';
            tooltip.style.minWidth = '200px';
            tooltip.style.maxWidth = '300px';
            
            tooltip.innerHTML = `
                <h4 style="margin-top: 0; margin-bottom: 0.5rem; font-size: 1.125rem;">${location.name}</h4>
                <p style="margin-bottom: 0.5rem; font-size: 0.875rem;"><i class="fas fa-map-marker-alt" style="width: 20px; color: #e58e26;"></i> ${location.address}</p>
                <p style="margin-bottom: 0.5rem; font-size: 0.875rem;"><i class="fas fa-phone-alt" style="width: 20px; color: #e58e26;"></i> ${location.phone}</p>
                <p style="margin-bottom: 0; font-size: 0.875rem;"><i class="fas fa-clock" style="width: 20px; color: #e58e26;"></i> ${location.hours}</p>
            `;
            
            // Add close button
            const closeBtn = document.createElement('button');
            closeBtn.innerHTML = '&times;';
            closeBtn.style.position = 'absolute';
            closeBtn.style.top = '5px';
            closeBtn.style.right = '5px';
            closeBtn.style.background = 'none';
            closeBtn.style.border = 'none';
            closeBtn.style.fontSize = '1.25rem';
            closeBtn.style.cursor = 'pointer';
            closeBtn.style.color = '#1a1a1a';
            
            closeBtn.addEventListener('click', (e) => {
                e.stopPropagation();
                tooltip.style.display = 'none';
                
                // Reset marker
                marker.style.color = '#e58e26';
                marker.style.transform = 'translate(-50%, -100%) scale(1)';
            });
            
            tooltip.appendChild(closeBtn);
            
            // Show tooltip
            tooltip.style.display = 'block';
            
            // Close tooltip when clicking outside
            document.addEventListener('click', function closeTooltip(e) {
                if (!tooltip.contains(e.target) && e.target !== marker) {
                    tooltip.style.display = 'none';
                    document.removeEventListener('click', closeTooltip);
                    
                    // Reset marker
                    marker.style.color = '#e58e26';
                    marker.style.transform = 'translate(-50%, -100%) scale(1)';
                }
            });
        }
    }
}

/**
 * FAQ Accordion
 */
function initFaqAccordion() {
    const faqItems = document.querySelectorAll('.faq-item');
    
    faqItems.forEach(item => {
        const question = item.querySelector('.faq-question');
        
        question.addEventListener('click', function() {
            // Toggle active class
            item.classList.toggle('active');
            
            // Toggle icon
            const icon = item.querySelector('.question-toggle i');
            icon.className = item.classList.contains('active') ? 'fas fa-minus' : 'fas fa-plus';
        });
    });
}

/**
 * Document Checklist Tool
 */
function initDocumentChecklistTool() {
    const caseTypeSelector = document.getElementById('caseTypeSelector');
    const documentChecklistContainer = document.getElementById('documentChecklistContainer');
    
    if (!caseTypeSelector || !documentChecklistContainer) return;
    
    // Document checklists by case type
    const documentChecklists = {
        unpaid_debt: [
            'Loan agreement or written acknowledgment of debt',
            'Proof of payment made (if partial payment was received)',
            'Bank statements showing transfers',
            'Communication records regarding the debt',
            'Demand letters sent to the debtor',
            'Calculation of interest (if applicable)',
            'ID document or passport'
        ],
        property_damage: [
            'Photos of damaged property',
            'Repair quotes or invoices',
            'Expert assessment of damage (if available)',
            'Police report (if one was filed)',
            'Insurance claim documents (if applicable)',
            'Witness statements',
            'ID document or passport'
        ],
        contract_dispute: [
            'Written contract or agreement',
            'Emails or messages related to the agreement',
            'Proof of payment',
            'Invoice or receipt',
            'Evidence of breach of contract',
            'Demand letter sent to the other party',
            'ID document or passport'
        ],
        consumer_complaint: [
            'Purchase receipt or invoice',
            'Product warranty information',
            'Photos of defective product',
            'Communications with the seller/service provider',
            'Repair quotes or cost of replacement',
            'Expert opinion on defect (if available)',
            'ID document or passport'
        ],
        landlord_tenant: [
            'Lease agreement',
            'Rent receipts',
            'Photos of property condition',
            'Inspection reports',
            'Communications with landlord/tenant',
            'Utility bills or payment records',
            'Eviction notice (if applicable)',
            'ID document or passport'
        ]
    };
    
    caseTypeSelector.addEventListener('change', function() {
        const selectedCaseType = this.value;
        
        if (selectedCaseType && documentChecklists[selectedCaseType]) {
            // Create checklist
            const checklistHtml = `
                <div class="document-checklist-wrapper">
                    <h4>${formatCaseType(selectedCaseType)} Case Documents</h4>
                    <p>The following documents are recommended for your case type:</p>
                    <div class="interactive-checklist">
                        ${documentChecklists[selectedCaseType].map((doc, index) => `
                            <label class="checklist-item">
                                <input type="checkbox" id="doc-${index}">
                                <span class="checklist-text">${doc}</span>
                            </label>
                        `).join('')}
                    </div>
                    <div class="checklist-actions">
                        <button class="btn-print">
                            <i class="fas fa-print"></i>
                            <span>Print Checklist</span>
                        </button>
                        <button class="btn-reset-checklist">
                            <i class="fas fa-redo"></i>
                            <span>Reset</span>
                        </button>
                    </div>
                </div>
            `;
            
            documentChecklistContainer.innerHTML = checklistHtml;
            
            // Style the checklist
            const checklistWrapper = documentChecklistContainer.querySelector('.document-checklist-wrapper');
            checklistWrapper.style.background = '#fff';
            checklistWrapper.style.borderRadius = '8px';
            checklistWrapper.style.padding = '1.5rem';
            checklistWrapper.style.boxShadow = '0 5px 15px rgba(0, 0, 0, 0.05)';
            
            checklistWrapper.querySelector('h4').style.marginTop = '0';
            checklistWrapper.querySelector('h4').style.marginBottom = '0.75rem';
            checklistWrapper.querySelector('h4').style.color = '#0f1b30';
            
            checklistWrapper.querySelector('p').style.marginBottom = '1.5rem';
            checklistWrapper.querySelector('p').style.color = '#6c757d';
            
            const interactiveChecklist = checklistWrapper.querySelector('.interactive-checklist');
            interactiveChecklist.style.marginBottom = '1.5rem';
            
            const checklistItems = checklistWrapper.querySelectorAll('.checklist-item');
            checklistItems.forEach(item => {
                item.style.display = 'flex';
                item.style.alignItems = 'flex-start';
                item.style.marginBottom = '0.75rem';
                item.style.cursor = 'pointer';
                item.style.transition = 'all 0.3s ease';
                
                const checkbox = item.querySelector('input[type="checkbox"]');
                checkbox.style.marginTop = '0.25rem';
                checkbox.style.marginRight = '0.75rem';
                
                const text = item.querySelector('.checklist-text');
                text.style.fontSize = '0.9375rem';
                text.style.color = '#1a1a1a';
                
                // Add checkmark effect
                checkbox.addEventListener('change', function() {
                    if (this.checked) {
                        text.style.textDecoration = 'line-through';
                        text.style.color = '#6c757d';
                    } else {
                        text.style.textDecoration = 'none';
                        text.style.color = '#1a1a1a';
                    }
                });
            });
            
            const checklistActions = checklistWrapper.querySelector('.checklist-actions');
            checklistActions.style.display = 'flex';
            checklistActions.style.gap = '1rem';
            
            const actionButtons = checklistActions.querySelectorAll('button');
            actionButtons.forEach(button => {
                button.style.display = 'flex';
                button.style.alignItems = 'center';
                button.style.gap = '0.5rem';
                button.style.padding = '0.75rem 1rem';
                button.style.border = 'none';
                button.style.borderRadius = '4px';
                button.style.cursor = 'pointer';
                button.style.transition = 'all 0.3s ease';
            });
            
            const printButton = checklistActions.querySelector('.btn-print');
            printButton.style.background = '#0f1b30';
            printButton.style.color = '#fff';
            
            printButton.addEventListener('mouseenter', () => {
                printButton.style.background = '#1e3a5f';
            });
            
            printButton.addEventListener('mouseleave', () => {
                printButton.style.background = '#0f1b30';
            });
            
            const resetButton = checklistActions.querySelector('.btn-reset-checklist');
            resetButton.style.background = '#f8f9fa';
            resetButton.style.color = '#1a1a1a';
            
            resetButton.addEventListener('mouseenter', () => {
                resetButton.style.background = '#e9ecef';
            });
            
            resetButton.addEventListener('mouseleave', () => {
                resetButton.style.background = '#f8f9fa';
            });
            
            // Print functionality
            printButton.addEventListener('click', function() {
                // In a real implementation, you'd use a proper print function
                alert('Printing functionality would be implemented here');
            });
            
            // Reset functionality
            resetButton.addEventListener('click', function() {
                const checkboxes = checklistWrapper.querySelectorAll('input[type="checkbox"]');
                checkboxes.forEach(checkbox => {
                    checkbox.checked = false;
                    const text = checkbox.nextElementSibling;
                    text.style.textDecoration = 'none';
                    text.style.color = '#1a1a1a';
                });
            });
        } else {
            // Show prompt to select a case type
            documentChecklistContainer.innerHTML = `
                <p class="select-prompt">Please select a case type to see the recommended documents.</p>
            `;
        }
    });
    
    function formatCaseType(caseType) {
        // Convert snake_case to Title Case
        return caseType
            .split('_')
            .map(word => word.charAt(0).toUpperCase() + word.slice(1))
            .join(' ');
    }
}

/**
 * Form Handling
 */
function initFormHandling() {
    const inquiryForm = document.getElementById('inquiryForm');
    
    if (inquiryForm) {
        inquiryForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Simple validation
            const fullName = document.getElementById('fullName').value;
            const email = document.getElementById('email').value;
            const inquiryType = document.getElementById('inquiryType').value;
            const message = document.getElementById('message').value;
            
            if (!fullName || !email || !inquiryType || !message) {
                alert('Please fill in all required fields.');
                return;
            }
            
            // In a real implementation, you'd send the form data to a server
            // For demo, show a success message
            
            // Create success message
            const successMessage = document.createElement('div');
            successMessage.className = 'form-success';
            successMessage.innerHTML = `
                <div class="success-icon">
                    <i class="fas fa-check-circle"></i>
                </div>
                <h3>Thank You for Your Inquiry</h3>
                <p>We have received your message and will respond to your email (${email}) within 2 business days.</p>
                <button class="btn-new-inquiry">Send Another Inquiry</button>
            `;
            
            // Style success message
            successMessage.style.textAlign = 'center';
            successMessage.style.padding = '2rem';
            
            const successIcon = successMessage.querySelector('.success-icon');
            successIcon.style.fontSize = '3rem';
            successIcon.style.color = '#43a047';
            successIcon.style.marginBottom = '1rem';
            
            successMessage.querySelector('h3').style.color = '#fff';
            successMessage.querySelector('h3').style.marginBottom = '1rem';
            
            successMessage.querySelector('p').style.color = '#b0b8c5';
            successMessage.querySelector('p').style.marginBottom = '2rem';
            
            const newInquiryBtn = successMessage.querySelector('.btn-new-inquiry');
            newInquiryBtn.style.padding = '0.75rem 1.5rem';
            newInquiryBtn.style.background = '#e58e26';
            newInquiryBtn.style.color = '#fff';
            newInquiryBtn.style.border = 'none';
            newInquiryBtn.style.borderRadius = '8px';
            newInquiryBtn.style.cursor = 'pointer';
            newInquiryBtn.style.transition = 'all 0.3s ease';
            
            newInquiryBtn.addEventListener('mouseenter', () => {
                newInquiryBtn.style.background = '#f7a443';
            });
            
            newInquiryBtn.addEventListener('mouseleave', () => {
                newInquiryBtn.style.background = '#e58e26';
            });
            
            // Replace form with success message
            inquiryForm.parentNode.replaceChild(successMessage, inquiryForm);
            
            // New inquiry button
            newInquiryBtn.addEventListener('click', function() {
                // Reset form
                inquiryForm.reset();
                
                // Replace success message with form
                successMessage.parentNode.replaceChild(inquiryForm, successMessage);
            });
        });
    }
}

/**
 * Animations
 */
function initAnimations() {
    // Animate elements when they enter viewport
    const animateElements = document.querySelectorAll('.key-feature, .case-type-card, .process-item, .resource-card');
    
    // Intersection Observer
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate-in');
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.2 });
    
    // Observe elements
    animateElements.forEach(element => {
        observer.observe(element);
    });
    
    // Add animation styles
    const style = document.createElement('style');
    style.textContent = `
        .key-feature, .case-type-card, .process-item, .resource-card {
            opacity: 0;
            transform: translateY(30px);
            transition: opacity 0.6s ease, transform 0.6s ease;
        }
        
        .animate-in {
            opacity: 1;
            transform: translateY(0);
        }
        
        .key-feature:nth-child(2), .case-type-card:nth-child(2), .resource-card:nth-child(2) {
            transition-delay: 0.1s;
        }
        
        .key-feature:nth-child(3), .case-type-card:nth-child(3), .resource-card:nth-child(3) {
            transition-delay: 0.2s;
        }
        
        .key-feature:nth-child(4), .case-type-card:nth-child(4), .resource-card:nth-child(4) {
            transition-delay: 0.3s;
        }
        
        .key-feature:nth-child(5), .case-type-card:nth-child(5), .resource-card:nth-child(5) {
            transition-delay: 0.4s;
        }
        
        .key-feature:nth-child(6), .case-type-card:nth-child(6), .resource-card:nth-child(6) {
            transition-delay: 0.5s;
        }
        
        .process-item:nth-child(2) {
            transition-delay: 0.2s;
        }
        
        .process-item:nth-child(4) {
            transition-delay: 0.4s;
        }
        
        .process-item:nth-child(6) {
            transition-delay: 0.6s;
        }
        
        .process-item:nth-child(8) {
            transition-delay: 0.8s;
        }
        
        .process-item:nth-child(10) {
            transition-delay: 1s;
        }
    `;
    document.head.appendChild(style);
    
    // Parallax effect for hero section
    const heroSection = document.querySelector('.small-claims-hero');
    if (heroSection) {
        window.addEventListener('scroll', () => {
            const scrollPosition = window.pageYOffset;
            const parallaxSpeed = 0.4;
            
            heroSection.style.backgroundPositionY = `${scrollPosition * parallaxSpeed}px`;
        });
    }
    
    // Smooth scroll for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            
            const targetId = this.getAttribute('href');
            const targetElement = document.querySelector(targetId);
            
            if (targetElement) {
                window.scrollTo({
                    top: targetElement.offsetTop - 100,
                    behavior: 'smooth'
                });
            }
        });
    });
}